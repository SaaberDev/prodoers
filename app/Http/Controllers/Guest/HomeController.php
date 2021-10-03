<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use App\Models\SiteCms;
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
//        $siteCms = SiteCms::homeInfos();
//
//        dd($siteCms);
//
//        $home = [
//            'headline' => $siteCms['banner_sections']->pluck('key'),
//            'tagline' => '',
//            'banner' => '',
//        ];
//
//
//        dd($home);


        $popular_categories = ServiceCategory::getAllPopular()
            ->withAndWhereHas('services', function ($query){
                $query->select('id', 'service_category_id', 'title', 'slug', 'price')->getAllPublished();
            })
            ->limit(9)
            ->orderBy('title')
            ->get(['id', 'title', 'slug', 'short_desc']);

//        foreach ($popular_categories as $popular_category) {
////            dump($popular_category->getFirstMedia('category_thumb'));
//            dump(showImage($popular_category, 'category_thumb'));
//        }
//        dd();

        return view('guest.index', compact('popular_categories'));
    }
}
