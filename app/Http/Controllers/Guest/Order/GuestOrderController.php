<?php

    namespace App\Http\Controllers\Guest\Order;

    use App\Http\Controllers\Controller;
    use App\Models\Service;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;

    class GuestOrderController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return Application|Factory|View
         */
        public function index($service_slug)
        {
            $service = Service::getSlug($service_slug)
                ->with('media', 'serviceCategories')
                ->select(['id', 'title', 'short_desc', 'delivery_time', 'price', 'slug', 'service_category_id'])
                ->first();

            return view('guest.pages.order_requirements', compact('service'));
        }

        /**
         * @return Application|Factory|View
         */
        public function confirmation()
        {
            $orderData = [];
            if (\Session::has('confirmation')) {
                $orderData = \Session::get('confirmation');
            }
            return view('guest.pages.order-confirmation', compact('orderData'));
        }
    }
