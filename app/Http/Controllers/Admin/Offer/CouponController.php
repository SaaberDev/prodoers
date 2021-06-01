<?php

    namespace App\Http\Controllers\Admin\Offer;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\Admin\Offer\CouponRequest;
    use App\Models\Coupon;
    use App\Models\Service;
    use App\Models\ServiceCategory;
    use Carbon\Carbon;
    use DB;
    use Exception;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;

    class CouponController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return Application|Factory|View|Response
         */
        public function index()
        {
            return view('admin_panel.pages.offers.coupon.index');
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Application|Factory|View|Response
         */
        public function create()
        {
//            $service_categories = ServiceCategory::orderByDesc('id')->get(['title', 'id']);
//            $services = Service::orderBy('id', 'desc')->get(['title', 'id']);
            return \view('admin_panel.pages.offers.coupon.create'/*, compact('service_categories', 'services')*/);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param CouponRequest $request
         * @return string
         */
        public function store(CouponRequest $request)
        {
            dd($request->all());
            DB::beginTransaction();
            try {
                $coupon = Coupon::firstOrCreate([
                    'published_status' => $request->input('published_status'),
                    'title' => $request->input('title'),
                    'coupon_code' => $request->input('coupon_code'),
                    'start_date' => $request->input('start_date'),
                    'end_date' => $request->input('end_date'),
                    'coupon_type' => $request->input('coupon_type'),
                    'percent_off' => $request->input('percent_off'),
                    'amount' => $request->input('fixed'),
                ]);

                $apply_to = $request->input('apply_to');

                if ($apply_to == 'categories') {
                    $categoryInput = collect($request->input('categories'));
                    $categoryInput->each(function ($category) use ($coupon) {
                        $coupon->categories()->attach($category);
                    });
                } elseif ($apply_to == 'services') {
                    $serviceInput = collect($request->input('services'));
                    $serviceInput->each(function ($service) use ($coupon) {
                        $coupon->services()->attach($service);
                    });
                } elseif ($apply_to == 'all') {
                    $all = ServiceCategory::get(['id']);
                    $all->each(function ($all) use ($coupon) {
                        $coupon->categories()->attach($all);
                    });
                }
                DB::commit();
            } catch (Exception $exception) {
                report($exception);
                DB::rollBack();
            }
            return redirect()->back();
        }

        /**
         * Display the specified resource.
         *
         * @param int $id
         * @return Response
         */
        public function show($id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param int $id
         * @return Application|Factory|View|Response
         */
        public function edit(/*$id*/)
        {
            return \view('admin_panel.pages.offers.coupon.edit');
        }

        /**
         * Update the specified resource in storage.
         *
         * @param Request $request
         * @param int $id
         * @return Response
         */
        public function update(Request $request, $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param int $id
         * @return Response
         */
        public function destroy($id)
        {
            //
        }
    }
