<?php


    namespace App\Repositories\PaymentGateway\Paypal\Order;


    use App\Models\Order;
    use App\Repositories\PaymentGateway\Paypal\PaypalClient;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Routing\Redirector;
    use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
    use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
    use PayPalHttp\HttpResponse;

    class PaypalOrder implements PaypalOrderInterface
    {
        private PaypalClient $client;

        function __construct(PaypalClient $client)
        {
            $this->client = $client;
        }

        /**
         * @return HttpResponse
         */
        public function create(): HttpResponse
        {
            $request = new OrdersCreateRequest();
            $request->headers["prefer"] = "return=representation";
            $request->body = self::buildRequestBody();

            return $this->client->client()->execute($request);
        }

        /**
         * @param $response
         * @return Application|RedirectResponse|Redirector
         */
        public function approve($response)
        {
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
                        "reference_id" => config('services.paypal.prefix.reference_id') . $order_number,
                        "description" => "Camera Shop",
                        "invoice_id" => config('services.paypal.prefix.invoice_id') . $order_number,
                        "invoice_description" => '#' . config('services.paypal.prefix.invoice_id') . $order_number,
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
                    "cancel_url" => route('test.cancel'),
                    "return_url" => route('test.success'),
                    'brand_name' => 'designwala',
                    'locale' => 'en-US',
                    'landing_page' => 'LOGIN',
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'PAY_NOW',
                ]
            ];
        }

        /**
         * @param $paypal_order_id
         * @return HttpResponse
         */
        public function capture($paypal_order_id): HttpResponse
        {
            $request = new OrdersCaptureRequest($paypal_order_id);
            $request->headers["prefer"] = "return=representation";
            return $this->client->client()->execute($request);
        }
    }
