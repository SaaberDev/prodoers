<?php

namespace App\Http\Controllers\admin_panel\services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\ServiceCategoryRequest;
use App\Models\ServiceCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

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
    public function store(ServiceCategoryRequest $request): RedirectResponse
    {
        $slug = SlugService::createSlug(ServiceCategory::class, 'slug', $request->input('service_category_title'));
        ServiceCategory::query()->firstOrCreate([
            'title' => $request->input('service_category_title'),
            'popular_status' => $request->input('category_popular', 0),
            'published_status' => $request->input('category_status', 0),
            'meta_desc' => $request->input('meta_description'),
            'slug' => $slug,
            'category_banner' => SingleImageUploadHandler($request, $slug, 'banner_image', 'banner', 'admin_panel/services_categories/banner/'),
            'category_thumbnail' => SingleImageUploadHandler($request, $slug, 'thumbnail_image', 'thumbnail','admin_panel/services_categories/thumbnail/'),
            'desc' => $request->input('service_description'),
        ]);

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

//    public function destroyBannerImage($id)
//    {
//        $notify = [
//            'alert-type' => 'success_toast',
//            'message' => 'Banner Image Deleted !',
//        ];
//        $service_categories = ServiceCategory::findOrFail($id);
//        $service_categories->category_banner->delete();
//        if (\File::exists(storage_path() . '/app/public/admin_panel/services_categories/banner/' . $service_categories->category_banner)){
//            \File::delete(storage_path() . '/app/public/admin_panel/services_categories/banner/' . $service_categories->category_banner);
//        }
//        return response()->json($notify);
//    }
//
//    public function destroyThumbnailImage($id)
//    {
//        $service_categories = ServiceCategory::findOrFail($id);
//        $service_categories->delete();
//        if (\File::exists(storage_path() . '/admin_panel/services_categories/banner/' . $service_categories->category_thumbnail)){
//            \File::delete(storage_path() . '/admin_panel/services_categories/banner/' . $service_categories->category_thumbnail);
//        }
//        return response()->json([
//            'message' => 'Image deleted successfully!'
//        ]);
//    }

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

        $service_categories->update([
            'title' => $request->input('service_category_title'),
            'popular_status' => $request->input('category_popular', 0),
            'published_status' => $request->input('category_status', 0),
            'meta_desc' => $request->input('meta_description'),
            'slug' => SlugService::createSlug(ServiceCategory::class, 'slug', $request->input('service_category_title')),
            'category_banner' => SingleImageUpdateHandler($request, $service_categories->category_banner, $service_categories->slug, 'banner_image', 'banner', 'admin_panel/services_categories/banner/'),
            'category_thumbnail' => SingleImageUpdateHandler($request, $service_categories->category_thumbnail, $service_categories->slug,'thumbnail_image', 'thumbnail','admin_panel/services_categories/thumbnail/'),
            'desc' => $request->input('service_description')
        ]);

        return redirect()->route('services.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
