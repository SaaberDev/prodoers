<?php

    namespace App\Http\Controllers\Admin\Service;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\Admin\Service\ServiceRequest;
    use App\Models\Service;
    use App\Models\ServiceCategory;
    use App\Models\ServiceFaq;
    use App\Models\ServiceFeature;
    use App\Models\ServiceImage;
    use App\Models\Tag;
    use App\Services\Dropzone\DropzoneAjax;
    use Cviebrock\EloquentSluggable\Services\SlugService;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use Illuminate\Support\Facades\DB;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;
    use Throwable;

    class ServiceController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return Application|Factory|View|Response
         */
        public function index()
        {
            return view('admin_panel.pages.services.service.index');
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Application|Factory|View|Response
         */
        public function create()
        {
            $service_categories = ServiceCategory::orderByDesc('title')->get(['title', 'id']);
            $service_tags = Tag::orderByDesc('title')->get(['title', 'id']);
            return view('admin_panel.pages.services.service.create', compact('service_categories', 'service_tags'));
        }

        /**
         * @param DropzoneAjax $dropzoneAjax
         * @return JsonResponse
         */
        public function storeMedia(DropzoneAjax $dropzoneAjax): JsonResponse
        {
            return $dropzoneAjax->storeMedia();
        }

        /**
         * @param DropzoneAjax $dropzoneAjax
         * @param Request $request
         * @return JsonResponse
         */
        public function destroyMedia(DropzoneAjax $dropzoneAjax, Request $request): JsonResponse
        {
            if ($request->input('single_media')) {
                return $dropzoneAjax->deleteMedia('single_media', 'uuid');
            }
            return $dropzoneAjax->deleteMedia('multiple_media', 'uuid');
        }

        public function getMedia(DropzoneAjax $dropzoneAjax, Request $request)
        {
            if ($request->get('request') === 'singleUploader') {
                return $dropzoneAjax->getMedia(Service::class,'service_thumb', 'id');
            }

            if ($request->get('request') === 'multipleUploader'){
                return $dropzoneAjax->getMedia(Service::class,'service', 'id');
            }
//            $services = Service::findOrFail($request->get('id'));
//            $medias = $services->getMedia('service');
//
//            return \response()->json($medias);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param ServiceRequest $request
         * @return RedirectResponse
         * @throws Throwable
         */
        public function store(Request $request)
        {
            DB::transaction(function () use ($request) {
                $slug = SlugService::createSlug(Service::class, 'slug', $request->input('service_title'));
                $services = Service::firstOrCreate([
                    'title' => $request->input('service_title'),
                    'popular_status' => $request->input('popular_status'),
                    'published_status' => $request->input('published_status'),
                    'meta_desc' => $request->input('meta_description'),
                    'service_category_id' => $request->input('allCategories'),
                    'price' => $request->input('service_price'),
                    'slug' => $slug,
                    'service_desc' => $request->input('service_description'),
                ]);

                // Service Image
                foreach ($request->input('multiple_media', []) as $file) {
                    $services->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('service', 'public');
                }
                // Service Thumbnail Image
                $services->addMedia(storage_path('tmp/uploads/' . $request->input('single_media')))->toMediaCollection('service_thumb', 'public');

                // Service Tags
                $service_tagInputs = $request->input('service_tags');
                $decode = json_decode($service_tagInputs);
                collect($decode)->each(function ($tag) use ($services) {
                    $services->tags()->attach($tag->value);
                });

                // Service Features
                $inputs = collect($request->input('features'));
                $inputs->each(function ($input) use ($services) {
                    ServiceFeature::firstOrCreate([
                        'service_id' => $services->id,
                        'feature_desc' => $input
                    ]);
                });

                // Service Faqs
                $faqs = [];
                $question = $request->input('question');
                $answer = $request->input('answer');
                for ($count = 0; $count < count($question); $count++) {
                    $data = array(
                        'question' => $question[$count],
                        'answer' => $answer[$count]
                    );
                    $faqs[] = $data;
                }
                foreach ($faqs as $faq) {
                    ServiceFaq::firstOrCreate([
                        'service_id' => $services->id,
                        'question' => $faq['question'],
                        'answer' => $faq['answer']
                    ]);
                }
            });

            return redirect()->back();
        }

        /**
         * Display the specified resource.
         *
         * @param int $id
         * @return Response
         */
        public function show($id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param int $id
         * @return Application|Factory|View
         */
        public function edit($id)
        {
            $services = Service::findOrFail($id); // TODO -- $service->serviceFaqs does not work in blade but $services->serviceFaqs works
            $service_categories = ServiceCategory::getTitle();
            $service_tags = Tag::getTitle();

            return view('admin_panel.pages.services.service.edit', compact('services', 'id', 'service_categories', 'service_tags'));
        }


        public function destroyServiceFeature($id)
        {
            $service_feature = ServiceFeature::findOrFail($id);
            DB::transaction(function () use ($service_feature) {
                $service_feature->delete();
            });

            return redirect()->back();
        }

        public function destroyServiceFaq($id)
        {
            $service_faqs = ServiceFaq::findOrFail($id);
            DB::transaction(function () use ($service_faqs) {
                $service_faqs->delete();
            });

            return redirect()->back();
        }

//    public function getMedia($id)
//    {
//        $services = Service::findOrFail($id);
//        $media = $services->getMedia('service_thumb');
//        return \response()->json($media);
//    }


        /**
         * Update the specified resource in storage.
         *
         * @param ServiceRequest $request
         * @param int $id
         * @return RedirectResponse
         */
        public function update(ServiceRequest $request, $id)
        {
            $services = Service::findOrFail($id);
            DB::transaction(function () use ($request, $services) {
                $slug = SlugService::createSlug(Service::class, 'slug', $request->input('service_title'));
                $services->update([
                    'title' => $request->input('service_title'),
                    'popular_status' => $request->input('popular_status'),
                    'published_status' => $request->input('published_status'),
                    'meta_desc' => $request->input('meta_description'),
                    'service_category_id' => $request->input('allCategories'),
                    'price' => $request->input('service_price'),
                    'slug' => $slug,
                    'thumbnail' => SingleImageUpdateHandler($request, $slug, $services->thumbnail, 'service_thumbnail', 'thumbnail', config('designwala_paths.images.services.thumbnail')),
                    'service_desc' => $request->input('service_description'),
                ]);

                // TODO --- need to work in update
                if (count($services->getMedia('document')) > 0) {
                    foreach ($services->getMedia('document') as $media) {
                        if (!in_array($media->file_name, $request->input('document', []))) {
                            $media->delete();
                        }
                    }
                }

                $media = $services->getMedia('document')->pluck('file_name')->toArray();

                foreach ($request->input('document', []) as $file) {
                    if (count($media) === 0 || !in_array($file, $media)) {
                        $services->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('document', 'public');
                    }
                }
                // TODO ---

                $service_tagInputs = collect(explode(',', $request->input('service_tags')));
                $services->tags()->sync($service_tagInputs);


                $images = MultiImageUpdateHandler($request, $slug, 'service_images', 'service-image', config('designwala_paths.images.services.service_image'));
                foreach ($images as $image) {
                    $services->serviceImages()->create([
                        'service_id' => $services->id,
                        'filename' => $image
                    ]);
                }

                $inputs = $request->input('features');
                $services->serviceFeatures()->delete();
                foreach ($inputs as $input) {
                    $services->serviceFeatures()->create([
                        'service_id' => $services->id,
                        'feature_desc' => $input
                    ]);
                }

                $faqs = [];
                $question = $request->input('question');
                $answer = $request->input('answer');
                for ($count = 0; $count < count($question); $count++) {
                    $data = array(
                        'question' => $question[$count],
                        'answer' => $answer[$count]
                    );
                    $faqs[] = $data;
                }
                $services->serviceFaqs()->delete();
                foreach ($faqs as $faq) {
                    $services->serviceFaqs()->create([
                        'service_id' => $services->id,
                        'question' => $faq['question'],
                        'answer' => $faq['answer']
                    ]);
                }
            });

            return redirect()->route('super_admin.service.self.index');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param int $id
         * @return RedirectResponse
         */
        public function destroy($id)
        {
            $notify = [
                'alert-type' => 'success_toast',
                'message' => 'Service has been Deleted !',
            ];
            $services = Service::findOrFail($id);
            DB::transaction(function () use ($services) {
                foreach ($services->serviceImages as $service_image) {
                    deleteFileBefore(config('designwala_paths.images.services.service_image'), $service_image->filename);
                }
                deleteFileBefore(config('designwala_paths.images.services.thumbnail'), $services->thumbnail);
                $services->delete();
            });

            return redirect()->back()->with($notify);
        }
    }
