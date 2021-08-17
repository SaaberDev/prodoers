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
    use Throwable;

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
         * @param MediaHandler $mediaHandler
         * @return RedirectResponse
         * @throws Throwable
         */
        public function store(ServiceCategoryRequest $request, MediaHandler $mediaHandler)
        {
//            dd($request->all());
            DB::beginTransaction();
            try {
                $slug = SlugService::createSlug(ServiceCategory::class, 'slug', $request->input('service_category_title'));
                $service_categories = ServiceCategory::firstOrCreate([
                    'title' => $request->input('service_category_title'),
                    'navbar_status' => $request->input('navbar_status'),
                    'popular_status' => $request->input('category_popular'),
                    'published_status' => $request->input('category_status'),
                    'meta_desc' => $request->input('meta_desc'),
                    'slug' => $slug,
                    'short_desc' => $request->input('short_desc'),
                    'order_instruction_desc' => $request->input('order_instruction_desc'),
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

                $order_instructions = $request->input('order_instructions');
                foreach ($order_instructions as $order_instruction) {
                    $service_categories->serviceCategoryInstructions()->create([
                        'order_instructions' => $order_instruction
                    ]);
                }

                DB::commit();
                return redirect()->route('super_admin.service.category.index');
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
         * @param $slug
         * @return Application|Factory|View|Response
         */
        public function edit($id)
        {
            $service_category = ServiceCategory::findOrFail($id);
            return \view('admin_panel.pages.services.category.edit', compact('service_category'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param ServiceCategoryRequest $request
         * @param MediaHandler $mediaHandler
         * @param int $id
         * @return RedirectResponse
         * @throws Throwable
         */
        public function update(ServiceCategoryRequest $request, MediaHandler $mediaHandler, $id)
        {
            dd($request->all());
            DB::beginTransaction();
            try {
                $service_category = ServiceCategory::findOrFail($id);

                $slug = SlugService::createSlug(ServiceCategory::class, 'slug', $request->input('service_category_title'));
                $service_category->update([
                    'title' => $request->input('service_category_title'),
                    'navbar_status' => $request->input('navbar_status'),
                    'popular_status' => $request->input('category_popular'),
                    'published_status' => $request->input('category_status'),
                    'meta_desc' => $request->input('meta_desc'),
                    'slug' => $slug,
                    'short_desc' => $request->input('service_description'),
                    'order_instruction_desc' => $request->input('order_instruction_desc')
                ]);

                // Banner Image
                $mediaHandler->updateSingleMedia($service_category, 'single_media_1', 'banner');
                // Category Thumbnail Image
                $mediaHandler->updateSingleMedia($service_category, 'single_media_2', 'category');

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
                $service_category->serviceCategoryFaqs()->delete();
                foreach ($faqs as $faq) {
                    $service_category->serviceCategoryFaqs()->firstOrCreate([
                        'service_category_id' => $service_category->id,
                        'question' => $faq['question'],
                        'answer' => $faq['answer']
                    ]);
                }
                DB::commit();
                return redirect()->route('super_admin.service.category.index');
            } catch (\Exception $exception) {
                DB::rollBack();
                report($exception->getMessage());
                return redirect()->back();
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
                $service_categories = ServiceCategory::findOrFail($id);
                $service_categories->delete();
                DB::commit();
                return \response()->json([
                    'alert_type' => 'success',
                    'message' => 'Category Deleted Successfully!',
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
                $faq = ServiceCategoryFaq::findOrFail($id);
                $faq->delete();
                DB::commit();
                return \response()->json([
                    'alert_type' => 'success',
                    'message' => 'Purchase Deleted Successfully!',
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
            if ($request->input('single_media_1')) {
                return $dropzone->deleteMedia(Media::class,'single_media_1', 'uuid', 'spatie');
            }
            return $dropzone->deleteMedia(Media::class,'single_media_2', 'uuid', 'spatie');
        }
    }
