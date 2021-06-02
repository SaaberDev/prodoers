<?php

namespace App\Http\Controllers\Guest\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
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
//        $services = Service::getSlug($service_slug)->with(['serviceCategories' => function($q){
//            $q->with('serviceCategoryFaqs');
//        }])->first();
        $related_services = Service::hideCurrent($services)->getAllPublished()->whereHas('service_tags', function($query) use ($services) {
            $query->whereIn('service_tags.id', $services->service_tags);
        })->get();
//        dd($related_services);
        request()->session()->put('url.intended', route('guest.order.index', $services->slug));
        return view('guest.pages.service_show', compact('services', 'related_services'));
    }
}
