<?php

    namespace App\Http\Controllers\Admin\Order;

    use App\Http\Controllers\Controller;
    use App\Models\Order;
    use App\Models\User;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use Spatie\Permission\Models\Role;

    class OrderController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return Application|Factory|View
         */
        public function index()
        {
            return view('admin_panel.pages.orders.order.index');
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Response
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param Request $request
         * @return Response
         */
        public function store(Request $request)
        {
            //
        }

        /**
         * Display the specified resource.
         *
         * @param int $id
         * @return Application|Factory|View|Response
         */
        public function show($id)
        {
            $order = Order::with('users', 'services:id,title,thumbnail', 'payments:order_id,paid_amount,discount,transaction_id,payment_method')
                ->select('id', 'service_id', 'order_number', 'requirements', 'applied_coupon', 'user_id')
                ->findOrFail($id);

            $designwalas = User::role('designwala')->get();

//            dd($designwalas);
            return \view('admin_panel.pages.orders.order.show', compact('order', 'designwalas'));
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
