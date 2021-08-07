<?php

    namespace App\Http\Controllers\Admin\Service;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\Admin\Service\ServiceCategoryRequest;
    use App\Models\Service;
    use App\Models\ServiceCategory;
    use App\Models\ServiceCategoryFaq;
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

    class ServiceCategoryController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return Application|Factory|View|Response
         */
        public function index()
        {
            return view('admin_panel.pages.services.category.index');
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Application|Factory|View|Response
         */
        public function create()
        {
            return view('admin_panel.pages.services.category.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param ServiceCategoryRequest $request
         *
         * @return RedirectResponse
         */
        public function store(Request $request, MediaHandler $mediaHandler)
        {
            DB::transaction(function () use ($request, $mediaHandler) {
                $slug = SlugService::createSlug(ServiceCategory::class, 'slug', $request->input('service_category_title'));
                $service_categories = ServiceCategory::firstOrCreate([
                    'title' => $request->input('service_category_title'),
                    'navbar_status' => $request->input('navbar_status'),
                    'popular_status' => $request->input('category_popular'),
                    'published_status' => $request->input('category_status'),
                    'meta_desc' => $request->input('meta_description'),
                    'slug' => $slug,
                    'desc' => $request->input('service_description'),
                ]);

                // Banner Image
                $mediaHandler->uploadSingleMedia($service_categories, 'single_media_1', 'banner');
                // Category Thumbnail Image
                $mediaHandler->uploadSingleMedia($service_categories, 'single_media_2', 'category');

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
                    $service_categories->serviceCategoryFaqs()->firstOrCreate([
                        'service_category_id' => $service_categories->id,
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
         * @param $slug
         * @return Application|Factory|View|Response
         */
        public function edit($id)
        {
            $service_category = ServiceCategory::findOrFail($id);
            $banner = \Storage::disk('local')->url(config('designwala_paths.images.service_categories.banner'));
            $thumbnail = \Storage::disk('local')->url(config('designwala_paths.images.service_categories.thumbnail'));
            return \view('admin_panel.pages.services.category.edit', compact('id', 'service_category', 'banner', 'thumbnail'));
        }

        public function destroyServiceCategoryFaq($id)
        {
            $notify = [
                'alert-type' => 'success_toast',
                'message' => 'FAQ Deleted !',
            ];
            $service_category_faqs = ServiceCategoryFaq::findOrFail($id);
            DB::transaction(function () use ($service_category_faqs) {
                $service_category_faqs->delete();
            });

//        return \response()->json($notify);
            return redirect()->back()->with($notify);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param ServiceCategoryRequest $request
         * @param int $id
         * @return RedirectResponse
         * @throws \Throwable
         */
        public function update(ServiceCategoryRequest $request, MediaHandler $mediaHandler, $id)
        {
            $service_categories = ServiceCategory::findOrFail($id);
            DB::transaction(function () use ($request, $service_categories, $mediaHandler) {
                $slug = SlugService::createSlug(ServiceCategory::class, 'slug', $request->input('service_category_title'));
                $service_categories->update([
                    'title' => $request->input('service_category_title'),
                    'navbar_status' => $request->input('navbar_status'),
                    'popular_status' => $request->input('category_popular'),
                    'published_status' => $request->input('category_status'),
                    'meta_desc' => $request->input('meta_description'),
                    'slug' => $slug,
                    'desc' => $request->input('service_description')
                ]);

                // Banner Image
                $mediaHandler->updateSingleMedia($service_categories, 'single_media_1', 'banner');
                // Category Thumbnail Image
                $mediaHandler->updateSingleMedia($service_categories, 'single_media_2', 'category');

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
                $service_categories->serviceCategoryFaqs()->delete();
                foreach ($faqs as $faq) {
                    $service_categories->serviceCategoryFaqs()->firstOrCreate([
                        'service_category_id' => $service_categories->id,
                        'question' => $faq['question'],
                        'answer' => $faq['answer']
                    ]);
                }
            });

            return redirect()->route('super_admin.service.category.index');
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
                'message' => 'Service Category Deleted !',
            ];
            $service_categories = ServiceCategory::findOrFail($id);
            deleteFileBefore(config('designwala_paths.images.service_categories.banner'), $service_categories->category_banner);
            deleteFileBefore(config('designwala_paths.images.service_categories.thumbnail'), $service_categories->category_thumbnail);
            $service_categories->delete();
            return redirect()->back()->with($notify);
        }

        /**
         * @param Dropzone $dropzone
         * @param Request $request
         * @return JsonResponse|void
         */
        public function getMedia(Dropzone $dropzone, Request $request)
        {
            if ($request->get('request') === 'banner') {
                return $dropzone->getMedia(ServiceCategory::class,'banner', 'id');
            }

            if ($request->get('request') === 'category'){
                return $dropzone->getMedia(ServiceCategory::class,'category', 'id');
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
            // TODO --  Need to work here
            if ($request->input('single_media_1')) {
                return $dropzone->deleteMedia(Media::class,'single_media_1', 'uuid', 'spatie');
            }
            return $dropzone->deleteMedia(Media::class,'single_media_2', 'uuid', 'spatie');
        }
    }
