<?php

namespace App\Http\Controllers\Guest\Service\Category;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GuestServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index($category_slug)
    {
        $category = ServiceCategory::getSlug($category_slug)->firstOrFail();
        $popular_services = Service::getAllPopular()->getAllPublished()->inRandomOrder()->limit(3)->get();

        $category_banner = \Storage::disk('local')->url(config('designwala_paths.images.service_categories.banner'));
        $service_thumbnail = \Storage::disk('local')->url(config('designwala_paths.images.services.thumbnail'));
        return view('guest.pages.category_show', compact('category', 'popular_services', 'category_banner', 'service_thumbnail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
//        ServiceCategory::where('slug', $slug)->firstOrFail();
//        return redirect()->route('user.single_category.index', compact('slug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
