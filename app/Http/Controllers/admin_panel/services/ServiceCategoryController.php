<?php

namespace App\Http\Controllers\admin_panel\services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\ServiceCategoryRequest;
use App\Models\ServiceCategory;
use App\Models\ServiceCategoryFaq;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Spatie\Tags\Tag;

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
    public function store(ServiceCategoryRequest $request)
    {
        DB::transaction(function () use ($request) {
            $slug = SlugService::createSlug(ServiceCategory::class, 'slug', $request->input('service_category_title'));
            $service_categories = ServiceCategory::firstOrCreate([
                'title' => $request->input('service_category_title'),
                'popular_status' => $request->input('category_popular'),
                'published_status' => $request->input('category_status'),
                'meta_desc' => $request->input('meta_description'),
                'slug' => $slug,
                'category_banner' => SingleImageUploadHandler($request, $slug, 'banner_image', 'banner',
                    config('designwala_paths.admin.images.store.categories.banner')),
                'category_thumbnail' => SingleImageUploadHandler($request, $slug, 'thumbnail_image', 'thumbnail',
                    config('designwala_paths.admin.images.store.categories.thumbnails')),
                'desc' => $request->input('service_description'),
            ]);

            $faqs = [];
            $question = $request->input('question');
            $answer = $request->input('answer');
            for($count = 0; $count < count($question); $count++)
            {
                $data = array(
                    'question' => $question[$count],
                    'answer'  => $answer[$count]
                );
                $faqs[] = $data;
            }
            foreach ($faqs as $faq){
//                dd($faq);
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
     * @param  int  $id
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
        $service_categories = ServiceCategory::findOrFail($id);
        return \view('admin_panel.pages.services.category.edit', compact('id', 'service_categories'));
    }

    public function destroyServiceCategoryFaq($id)
    {
        $notify = [
            'alert-type' => 'success_toast',
            'message' => 'FAQ Deleted !',
        ];
        $service_category_faqs = ServiceCategoryFaq::findOrFail($id);
        DB::transaction(function () use ($service_category_faqs){
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
     */
    public function update(ServiceCategoryRequest $request, $id)
    {
        $service_categories = ServiceCategory::findOrFail($id);
        DB::transaction(function () use ($request, $service_categories) {
            $slug = SlugService::createSlug(ServiceCategory::class, 'slug', $request->input('service_category_title'));
            $service_categories->update([
                'title' => $request->input('service_category_title'),
                'popular_status' => $request->input('category_popular'),
                'published_status' => $request->input('category_status'),
                'meta_desc' => $request->input('meta_description'),
                'slug' => $slug,
                'category_banner' => SingleImageUpdateHandler($request, $slug, $service_categories->category_banner,
                    'banner_image', 'banner', 'admin_panel/services_categories/banner/'),
                'category_thumbnail' => SingleImageUpdateHandler($request, $slug,
                    $service_categories->category_thumbnail, 'thumbnail_image', 'thumbnail',
                    'admin_panel/services_categories/thumbnail/'),
                'desc' => $request->input('service_description')
            ]);

            $faqs = [];
            $question = $request->input('question');
            $answer = $request->input('answer');
            for($count = 0; $count < count($question); $count++)
            {
                $data = array(
                    'question' => $question[$count],
                    'answer'  => $answer[$count]
                );
                $faqs[] = $data;
            }
            $service_categories->serviceCategoryFaqs()->delete();
            foreach ($faqs as $faq){
                $service_categories->serviceCategoryFaqs()->firstOrCreate([
                    'service_category_id' => $service_categories->id,
                    'question' => $faq['question'],
                    'answer' => $faq['answer']
                ]);
            }
        });

        return redirect()->route('services.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $notify = [
            'alert-type' => 'success_toast',
            'message' => 'Service Category Deleted !',
        ];
        $service_categories = ServiceCategory::findOrFail($id);
        deleteFileBefore('admin_panel/services_categories/banner/', $service_categories->category_banner);
        deleteFileBefore('admin_panel/services_categories/thumbnail/', $service_categories->category_thumbnail);
        $service_categories->delete();
        return redirect()->back()->with($notify);
    }
}
