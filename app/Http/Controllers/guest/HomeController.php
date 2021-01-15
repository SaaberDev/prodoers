<?php

namespace App\Http\Controllers\guest;

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
//        SEOMeta::setTitle(env('APP_NAME'));
//        SEOMeta::setDescription('Stop wasting time on hassling, let professionals do your job.');
//        OpenGraph::setTitle(env('APP_NAME'));
//        OpenGraph::setDescription('Stop wasting time on hassling, let professionals do your job.');
        $search = request()->input('search');
        $popular_categories = ServiceCategory::getAllPopular()->get();
        return view('user_panel.index', compact('popular_categories', 'search'));
    }

    public function search()
    {
        $search = request()->input('q');
        $services = Service::getAllPublished()->SearchByTitle($search)->get();

        return redirect()->route('guest.search.index', compact('services', 'search'));
    }
}
