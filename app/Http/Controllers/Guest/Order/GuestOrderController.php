<?php

    namespace App\Http\Controllers\Guest\Order;

    use App\Http\Controllers\Controller;
    use App\Models\Service;
    use App\Repositories\Order\ProcessOrder;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\Support\Facades\Session;

    class GuestOrderController extends Controller
    {
        private ProcessOrder $processOrder;

        public function __construct(ProcessOrder $processOrder)
        {
            $this->processOrder = $processOrder;
        }

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
            \session()->put('order', [
                'grand_total' => $service->price
            ]);

            return view('guest.pages.order_requirements', compact('service'));
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param Request $request
         * @return \Illuminate\Http\RedirectResponse
         */
        public function store(Request $request)
        {
            $data = [];
            $this->processOrder->setData($request, $data);

            $payment_method = $request->only('payment_method');
            return redirect()->route('test.payment', $payment_method);
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
         * @return Response
         */
        public function edit($id)
        {
            //
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
