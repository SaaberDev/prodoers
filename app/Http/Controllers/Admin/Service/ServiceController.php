<?php

    namespace App\Http\Controllers\Admin\Service;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\Admin\Service\ServiceRequest;
    use App\Models\Service;
    use App\Models\ServiceCategory;
    use App\Models\ServiceFaq;
    use App\Models\ServiceFeature;
    use App\Models\Tag;
    use App\Services\Dropzone\Dropzone;
    use App\Services\MediaLibrary\MediaHandler;
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
         * @return Application|Factory|View
         */
        public function index()
        {
            return view('admin_panel.pages.services.service.index');
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Application|Factory|View
         */
        public function create()
        {
            $service_categories = ServiceCategory::orderByDesc('title')->get(['title', 'id']);
            $service_tags = Tag::orderByDesc('title')->get(['title', 'id']);
            return view('admin_panel.pages.services.service.create', compact('service_categories', 'service_tags'));
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param ServiceRequest $request
         * @return RedirectResponse
         * @throws Throwable
         */
        public function store(Request $request, MediaHandler $mediaHandler)
        {
            DB::beginTransaction();
            try {
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
                $mediaHandler->uploadMultipleMedia($services, 'multiple_media', 'service');
                // Service Thumbnail Image
                $mediaHandler->uploadSingleMedia($services, 'single_media', 'service_thumb');

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

                DB::commit();
                return redirect()->route('super_admin.service.self.index');
            } catch (\Exception $exception) {
                DB::rollBack();
                report($exception->getMessage());
                return redirect()->back();
            }
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
            $service = Service::findOrFail($id);
            $service_categories = ServiceCategory::getTitle();

            // Tags
            $tags = Tag::getTitle();
            $service_tags = $service->tags->pluck('title');

            return view('admin_panel.pages.services.service.edit', compact('service', 'service_categories', 'tags', 'service_tags'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param ServiceRequest $request
         * @param MediaHandler $mediaHandler
         * @param int $id
         * @return RedirectResponse
         * @throws Throwable
         */
        public function update(ServiceRequest $request, MediaHandler $mediaHandler, int $id)
        {
            DB::beginTransaction();
            try {
                $service = Service::findOrFail($id);
                $slug = SlugService::createSlug(Service::class, 'slug', $request->input('service_title'));
                $service->update([
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
                $mediaHandler->updateMultipleMedia($service, 'multiple_media', 'service');
                // Service Thumb
                $mediaHandler->updateSingleMedia($service, 'single_media', 'service_thumb');

                // Tags
                $service_tagInputs = collect(explode(',', $request->input('service_tags')));
                $service->tags()->sync($service_tagInputs);


                // Features
                $inputs = $request->input('features');
                $service->serviceFeatures()->delete();
                foreach ($inputs as $input) {
                    $service->serviceFeatures()->create([
                        'service_id' => $service->id,
                        'feature_desc' => $input
                    ]);
                }

                // Faqs
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
                $service->serviceFaqs()->delete();
                foreach ($faqs as $faq) {
                    $service->serviceFaqs()->create([
                        'service_id' => $service->id,
                        'question' => $faq['question'],
                        'answer' => $faq['answer']
                    ]);
                }

                DB::commit();
                return redirect()->route('super_admin.service.self.index');
            } catch (\Exception $exception) {
                DB::rollBack();
                report($exception->getMessage());
                return back();
            }
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param int $id
         * @return JsonResponse
         * @throws Throwable
         */
        public function destroy($id)
        {
            DB::beginTransaction();
            try {
                $services = Service::findOrFail($id);
                $services->delete();
                DB::commit();
                return \response()->json([
                    'alert_type' => 'success',
                    'message' => 'Service Deleted Successfully!',
                ]);
            } catch (\Exception $exception) {
                DB::rollBack();
                report($exception->getMessage());
                return \response()->json([
                    'alert_type' => 'warning',
                    'message' => 'Opps, Something went wrong!',
                ]);
            }
        }

        /**
         * @param $id
         * @return JsonResponse
         * @throws Throwable
         */
        public function destroyFeature($id)
        {
            DB::beginTransaction();
            try {
                $service_feature = ServiceFeature::findOrFail($id);
                $service_feature->delete();
                DB::commit();
                return \response()->json([
                    'alert_type' => 'success',
                    'message' => 'Feature Deleted Successfully!',
                ]);
            } catch (\Exception $exception) {
                DB::rollBack();
                report($exception->getMessage());
                return \response()->json([
                    'alert_type' => 'warning',
                    'message' => 'Opps, Something went wrong!',
                ]);
            }
        }

        /**
         * @param $id
         * @return JsonResponse
         * @throws Throwable
         */
        public function destroyFaq($id)
        {
            DB::beginTransaction();
            try {
                $service_faqs = ServiceFaq::findOrFail($id);
                $service_faqs->delete();
                DB::commit();
                return \response()->json([
                    'alert_type' => 'success',
                    'message' => 'Faq Deleted Successfully!',
                ]);
            } catch (\Exception $exception) {
                DB::rollBack();
                report($exception->getMessage());
                return \response()->json([
                    'alert_type' => 'warning',
                    'message' => 'Opps, Something went wrong!',
                ]);
            }
        }


        /**
         * @param Dropzone $dropzone
         * @param Request $request
         * @return JsonResponse|void
         */
        public function getMedia(Dropzone $dropzone, Request $request)
        {
            if ($request->get('request') === 'service'){
                return $dropzone->getMedia(Service::class,'service', 'id');
            }

            if ($request->get('request') === 'service_thumb') {
                return $dropzone->getMedia(Service::class,'service_thumb', 'id');
            }
        }

        /**
         * @param Dropzone $dropzone
         * @return JsonResponse
         */
        public function storeMedia(Dropzone $dropzone): JsonResponse
        {
            return $dropzone->storeMedia();
        }

        /**
         * @param Dropzone $dropzone
         * @param Request $request
         * @return JsonResponse
         */
        public function destroyMedia(Dropzone $dropzone, Request $request): JsonResponse
        {
            if ($request->input('single_media')) {
                return $dropzone->deleteMedia(Media::class,'single_media', 'uuid', 'spatie');
            }
            return $dropzone->deleteMedia(Media::class,'multiple_media', 'uuid', 'spatie');
        }
    }
