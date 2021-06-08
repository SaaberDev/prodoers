<?php

    namespace App\Http\Controllers\Guest\Search;

    use App\Http\Controllers\Controller;
    use App\Models\Service;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;

    class GuestSearchController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return Application|Factory|View|RedirectResponse
         */
        public function index()
        {
            $service_thumbnail = \Storage::disk('local')->url(config('designwala_paths.images.services.thumbnail'));
            return view('guest.pages.service_search', compact('service_thumbnail'));
        }
    }
