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
        $services = Service::getSlug($service_slug)->first();
        $related_services = Service::hideCurrent($services)->getAllPublished()->whereHas('tags', function(Builder $query) use ($services) {
            $query->select('tags.id')->whereIn('tags.id', $services->tags->pluck('id'));
        })->select(['title', 'slug', 'price', 'thumbnail'])->get();

        $service_image = \Storage::disk('local')->url(config('designwala_paths.images.services.service_image'));
        $service_thumbnail = \Storage::disk('local')->url(config('designwala_paths.images.services.thumbnail'));

        request()->session()->put('url.intended', route('guest.order.index', $services->slug));
        return view('guest.pages.service_show', compact('services', 'related_services', 'service_image', 'service_thumbnail'));
    }
}
