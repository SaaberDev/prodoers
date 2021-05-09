<?php


    namespace App\Repositories\Billing\PaymentGateway\Paypal;


    use App\Models\Order;
    use App\Repositories\Billing\BillingInterface;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Routing\Redirector;
    use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
    use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
    use PayPalHttp\HttpResponse;

    class PaypalOrder implements BillingInterface
    {
        private PaypalClient $client;

        function __construct()
        {
            $this->client = new PaypalClient();
        }

        /**
         * @return Application|Redirector|RedirectResponse
         */
        public function makePayment()
        {
            $request = new OrdersCreateRequest();
            $request->headers["prefer"] = "return=representation";
            $request->body = self::buildRequestBody();

            $response = $this->client->client()->execute($request);

            session()->put('other', [
                'paypal_order_id' => $response->result->id
            ]);
            if ($response->statusCode !== 201) {
                abort(500);
            }

            foreach ($response->result->links as $link) {
                if ($link->rel == 'approve') {
                    return redirect($link->href);
                }
            }
        }

        /**
         * When user cancel the payment this will simply forget order session data and regenerate new session token
         */
        public function cancelPayment()
        {
            session()->forget(['item', 'other']);
            session()->regenerate();
        }


        /**
         * @param $order_id
         * @return HttpResponse
         * @throws \Throwable
         */
        public function successPayment($order_id): HttpResponse
        {
            $request = new OrdersCaptureRequest($order_id);
            $request->headers["prefer"] = "return=representation";

            return $this->client->client()->execute($request);
        }

        /**
         * @return array
         */
        private static function buildRequestBody(): array
        {
            $order_number = Order::count() + 1;
            $orderItems = [];
            $orderItems[] = [
                'name' => 'Logo Design',
                "description" => "Black Camera - Digital SLR",
                'quantity' => 1,
                'unit_amount' => [
                    'currency_code' => 'USD',
                    'value' => session('item.pay_amount')
                ],
                'category' => 'DIGITAL_GOODS',
            ];

            return [
                "intent" => "CAPTURE",
                "purchase_units" => [
                    [
                        'items' => $orderItems,
                        "reference_id" => config('payment_gateway.prefix.reference_id') . $order_number,
                        "description" => "Camera Shop",
                        "invoice_id" => config('payment_gateway.prefix.invoice_id') . $order_number,
                        "amount" => [
                            "value" => session('item.pay_amount'),
                            "currency_code" => "USD",
                            "breakdown" => [
                                'item_total' =>
                                    [
                                        'currency_code' => 'USD',
                                        'value' => session('item.pay_amount'),
                                    ],
                            ]
                        ]
                    ]
                ],

                "application_context" => [
                    "cancel_url" => config('payment_gateway.return_url.cancel_url'),
                    "return_url" => config('payment_gateway.return_url.success_url'),
                    'brand_name' => 'designwala',
                    'locale' => 'en-US',
                    'landing_page' => 'LOGIN',
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'PAY_NOW',
                ]
            ];
        }
    }
