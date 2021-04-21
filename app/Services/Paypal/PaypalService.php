<?php


    namespace App\Services\Paypal;


    use App\Models\Order;
    use PayPalCheckoutSdk\Core\PayPalHttpClient;
    use PayPalCheckoutSdk\Core\SandboxEnvironment;
    use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
    use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
    use PayPalCheckoutSdk\Payments\CapturesGetRequest;

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

        public function createOrder($orderId)
        {
            $request = new OrdersCreateRequest();
            $request->headers["prefer"] = "return=representation";
            $request->body = $this->checkoutData($orderId);

            return $this->client->execute($request);
        }

        public function captureOrder($token)
        {
            $request = new OrdersCaptureRequest($token);
            $request->headers["prefer"] = "return=representation";
            return $this->client->execute($request);
        }

        private function checkoutData($orderId)
        {
            $order = Order::find($orderId);
            return [
                "intent" => "CAPTURE",
                "purchase_units" => [[
                    "reference_id" => uniqid('designwala_purchase_'),
//                    "invoice_id" => uniqid('202104'),
                    "amount" => [
                        "value" => $order->pay_amount,
                        "currency_code" => "USD"
                    ]
                ]],
                "application_context" => [
                    "cancel_url" => route('test.cancel', $orderId),
                    "return_url" => route('test.success', $orderId)
                ]
            ];
        }
    }
