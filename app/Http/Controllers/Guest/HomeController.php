<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\SiteCms;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use function Sodium\increment;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $popular_categories = ServiceCategory::getAllPopular()
            ->withAndWhereHas('services', function ($query){
                $query->select('id', 'service_category_id', 'title', 'slug', 'price')->getAllPublished();
            })
            ->limit(9)
            ->orderBy('title')
            ->get(['id', 'title', 'slug', 'desc', 'category_thumbnail', 'category_banner']);

        return view('guest.index', compact('popular_categories'));
    }
}
