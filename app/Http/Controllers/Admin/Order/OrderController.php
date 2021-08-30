<?php

    namespace App\Http\Controllers\Admin\Order;

    use App\Http\Controllers\Controller;
    use App\Models\Order;
    use App\Models\Service;
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
            $order = Order::findOrFail($id);
            $service_media = $order->services->getFirstMedia('service_thumb');

            $order_attachments = [];
            foreach ($order->getMedia('requirements') as $media) {
//                dd($media);
                $order_attachments[] = $media->getFullUrl();
//                dump($order_attachments);
            }
//            dd($order_attachments);

            $assignedUserData = [];
            foreach ($order->assignUsers as $assignUser) {
                $assignedUserData[] = [
                    'id' => $assignUser->id,
                    'username' => $assignUser->username,
                ];
            }

            $data = [
                'service_info' => [
                    'id' => $order->services->id,
                    'service_name' => $order->services->title,
                    'delivery_time' => $order->services->delivery_time,
                    'service_thumb' => $service_media->getFullUrl(),
                ],
                'order_info' => [
                    'id' => $order->id,
                    'order_number' => $order->order_number,
                    'requirements' => $order->requirements,
                    'order_status' => $order->getStatus(false),
                    'applied_coupon' => $order->applied_coupon,
                    'attachments' => $order_attachments,
                ],
                'user_info' => [
                    'id' => $order->users->id,
                    'name' => $order->users->name,
                    'email' => $order->users->email,
                ],
                'payment_info' => [
                    'transaction_id' => $order->payments->transaction_id,
                    'payment_method' => $order->payments->payment_method,
                    'paid_amount' => $order->payments->paid_amount,
                    'discount' => $order->payments->discount,
                ],
                'assigned_users' => $assignedUserData,
            ];

            $order_details = collect(json_decode(json_encode($data)));

//            dd($order_details);

            return \view('admin_panel.pages.orders.order.show', compact('order_details'));
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
