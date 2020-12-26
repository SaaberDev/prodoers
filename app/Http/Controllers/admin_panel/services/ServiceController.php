<?php

namespace App\Http\Controllers\admin_panel\services;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Services\Service\CreateComponent;
use App\Http\Requests\Services\ServiceRequest;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceFaq;
use App\Models\ServiceFeature;
use App\Models\ServiceImage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Validator;

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
        $service_categories = ServiceCategory::CategoriesTitleById();
        return view('admin_panel.pages.services.service.create', compact('service_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServiceRequest $request
     * @return RedirectResponse
     */
    public function store(ServiceRequest $request)
    {
//        dd($request->input('field'));

        $services = Service::query()->firstOrCreate([
            'title' => $request->input('service_title'),
            'published_status' => $request->input('published_status'),
            'meta_desc' => $request->input('meta_description'),
            'service_category_id' => $request->input('allCategories'),
            'price' => $request->input('service_price'),
            'slug' => SlugService::createSlug(Service::class, 'slug', $request->input('service_title')),
            'thumbnail' => SingleImageUploadHandler($request, 'service_thumbnail', 'service_title', 'thumbnail',
                'admin_panel/services/thumbnail/'),
            'service_desc' => $request->input('service_description'),
        ]);
//
        foreach ($request->input('field') as $input){
            ServiceFeature::query()->firstOrCreate([
                'service_id' => $services->id,
                'feature_desc' => $input
            ]);
        }
//
        $images = MultiImageUploadHandler($request, 'service_images', 'service_title', 'service-image',
            'admin_panel/services/service_image/');
//        dd($images);
        foreach ($images as $image){
//            dump($image);
//            dd($services->id);
//            DB::enableQueryLog();
            ServiceImage::query()->firstOrCreate([
                'service_id' => $services->id,
                'filename' => $image
            ]);
//            dd(DB::getQueryLog());
        }
//        dd();


//        collect($request->input('faqs.question'))->each(function ($faq){
//            var_dump($faq);
//            die();
//        });

//        foreach ($request->input('faqs') as $input){
//            ServiceFaq::query()->firstOrCreate([
////                'service_id' => $services->id,
//                'question' => $input,
//                'answer' => $input
//            ]);
//        }

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
        return view('admin_panel.pages.services.service.edit');
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
