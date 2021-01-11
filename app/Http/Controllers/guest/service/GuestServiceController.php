<?php

namespace App\Http\Controllers\guest\service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GuestServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index($service_slug)
    {
        $services = Service::getSlug($service_slug)->first();
        $current_service_tags = $services->tags->pluck('tags');
//        dd($current_service_tags);
//        $related_services = Service::with('tags')->where('published_status', '=', 1)->get();
//        foreach ($related_services as $related_service)
//        $related_services->each(function ($related_service) use ($services){
//            $related_service->tags->pluck('tags');
//        });
//        $related = $related_services->tags->pluck('tags');
//        dd($related_services);
        $querys = Tag::where('tags','like', '%' . $current_service_tags . '%')->get();
//        foreach ($querys as $query)
        dump($querys);
        dd();

        if ($current_service_tags === $related_services){
            echo "hello";
        } else {
            echo "Nooooo";
        }

//        dd($services->tags);
        $related_services = Tag::where('tags', 'like', '%' . $services->tags . '%')->get();
        foreach ($related_services as $related_service)
        dump($related_service);
        dd();
        return view('user_panel.pages.service_show', compact('services'));
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
     * @param $service_slug
     * @return Response
     */
    public function show($service_slug)
    {
        //
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
