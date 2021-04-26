<?php


    namespace App\Services\Paypal;


    use App\Models\Order;
    use PayPalCheckoutSdk\Core\PayPalHttpClient;
    use PayPalCheckoutSdk\Core\SandboxEnvironment;
    use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
    use PayPalCheckoutSdk\Orders\OrdersCreateRequest;

    class PaypalService
    {
        private PayPalHttpClient $client;

        function __construct()
        {
            $environment = new SandboxEnvironment(
                config('services.paypal.sandbox.client_id') ?? config('services.paypal.live.client_id'),
                config('services.paypal.sandbox.client_secret') ?? config('services.paypal.live.client_secret')
            );
            $this->client = new PayPalHttpClient($environment);
        }

        public function createOrder()
        {
            $request = new OrdersCreateRequest();
            $request->headers["prefer"] = "return=representation";
            $request->body = $this->checkoutData();

            return $this->client->execute($request);
        }

        public function captureOrder($paypal_order_id)
        {
            $request = new OrdersCaptureRequest($paypal_order_id);
            $request->headers["prefer"] = "return=representation";
            return $this->client->execute($request);
        }

        private function checkoutData()
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
                "purchase_units" => [[
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
                ]],

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
    }
