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
}
