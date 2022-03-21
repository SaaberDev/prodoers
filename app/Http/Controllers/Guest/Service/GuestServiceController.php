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

        $tags = $service->tags;

        \Session::put('site_custom_url.intended_order_page', route('guest.order.index', $service->slug));
        \Session::put('site_custom_url.current_service', url()->current());
        return view('guest.pages.service_show', compact('service', 'related_services', 'tags'));
    }

    /**
     * Initialize session based on place button click
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function initAuthSession()
    {
        if (\Session::has('site_custom_url.current_auth_url')) {
            \Session::forget('site_custom_url.current_auth_url');
        }
        \Session::put('site_custom_url.current_auth_url', \Session::get('site_custom_url.intended_order_page'));

        return \response()->json([
            'status' => 'success',
            'message' => 'Session Removed'
        ]);
    }
}
