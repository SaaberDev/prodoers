<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
//        \DB::enableQueryLog();
        $popular_categories = ServiceCategory::getAllPopular()
            ->with([
                'services' => function($query){
                    $query->select('service_category_id', 'price')->getAllPublished();
                }
            ])->limit(9)->get(['id', 'title', 'slug', 'desc', 'category_thumbnail', 'category_banner']);
//        dd($popular_categories->toArray());
//        dd($popular_categories);
//        var_dump(\DB::getQueryLog());
//        dd();
        return view('guest.index', compact('popular_categories'));
    }
}
