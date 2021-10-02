<?php

namespace App\Http\Controllers\Guest\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
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
        $service = Service::getSlug($service_slug)->firstOrFail();
        $related_services = Service::hideCurrent($service)
            ->getAllPublished()
            ->whereHas('tags', function(Builder $query) use ($service) {
            $query->select('tags.id')
                ->whereIn('tags.id', $service->tags->pluck('id'));
        })
            ->select(['title', 'slug', 'price'])
            ->get();

        request()->session()->put('url.intended', route('guest.order.index', $service->slug));
        return view('guest.pages.service_show', compact('service', 'related_services'));
    }
}
