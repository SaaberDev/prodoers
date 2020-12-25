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

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
//        $service_categories = ServiceCategory::orderById();
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
        ServiceCategory::query()->firstOrCreate([
            'title' => $request->input('service_category_title'),
            'popular_status' => $request->input('category_popular', 0),
            'published_status' => $request->input('category_status', 0),
            'meta_desc' => $request->input('meta_description'),
            'slug' => SlugService::createSlug(ServiceCategory::class, 'slug', $request->input('service_category_title')),
            'category_banner' => SingleImageUploadHandler($request, 'banner_image', 'service_category_title', 'banner', 'admin_panel/services_categories/banner/'),
            'category_thumbnail' => SingleImageUploadHandler($request, 'thumbnail_image', 'service_category_title', 'thumbnail','admin_panel/services_categories/thumbnail/'),
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
     * @param  int  $id
     * @return Application|Factory|View|Response
     */
    public function edit(/*$id*/)
    {
        return \view('admin_panel.pages.services.category.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
