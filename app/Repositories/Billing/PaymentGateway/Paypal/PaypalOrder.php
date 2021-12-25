<?php


    namespace App\Repositories\Billing\PaymentGateway\Paypal;

    use App\Repositories\Billing\BillingInterface;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Routing\Redirector;
    use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
    use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
    use PayPalHttp\HttpResponse;
    use Throwable;

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
        public function makePayment($data)
        {
            $pay_type = request()->input('payment_method');
            $request = new OrdersCreateRequest();
            $request->headers["prefer"] = "return=representation";
            $request->body = self::buildRequestBody($pay_type, $data);

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
         * @param $pay_type
         * @param $data
         * @return array
         */
        private static function buildRequestBody($pay_type, $data): array
        {
            $orderItems = [];
            $orderItems[] = [
                'name' => $data['product_name'],
                "description" => $data['product_desc'],
                'quantity' => 1,
                'unit_amount' => [
                    'currency_code' => 'USD',
                    'value' => $data['pay_amount']
                ],
                'category' => 'DIGITAL_GOODS',
            ];

            return [
                "intent" => "CAPTURE",
                "purchase_units" => [
                    [
                        'items' => $orderItems,
                        "reference_id" => $data['reference_id'],
                        "description" => $data['product_desc'],
                        "invoice_id" => $data['invoice_number'],
                        "amount" => [
                            "value" => $data['pay_amount'],
                            "currency_code" => "USD",
                            "breakdown" => [
                                'item_total' =>
                                    [
                                        'currency_code' => 'USD',
                                        'value' => $data['pay_amount'],
                                    ],
                            ]
                        ]
                    ]
                ],

                "application_context" => [
                    "cancel_url" => config('payment_gateway.return_url.cancel_url') . $pay_type,
                    "return_url" => config('payment_gateway.return_url.success_url') . $pay_type,
                    'brand_name' => 'ProDoers',
                    'locale' => 'en-US',
                    'landing_page' => 'LOGIN',
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'PAY_NOW',
                ]
            ];
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
         * @throws Throwable
         */
        public function successPayment($order_id): HttpResponse
        {
            $request = new OrdersCaptureRequest($order_id);
            $request->headers["prefer"] = "return=representation";

            return $this->client->client()->execute($request);
        }
    }
