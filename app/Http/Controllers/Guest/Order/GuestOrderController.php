<?php

    namespace App\Http\Controllers\Guest\Order;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\Guest\Coupon\CouponRequest;
    use App\Http\Requests\Guest\Order\OrderRequest;
    use App\Models\Order;
    use App\Models\Service;
    use App\Repositories\Order\ProcessOrder;
    use App\Services\Coupon\CouponServiceInterface;
    use App\Services\Dropzone\Dropzone;
    use Auth;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Http\Exceptions\HttpResponseException;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Response;
    use Session;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;
    use Str;

    class GuestOrderController extends Controller
    {
        private CouponServiceInterface $couponService;
        private ProcessOrder $processOrder;

        public function __construct(CouponServiceInterface $couponService, ProcessOrder $processOrder)
        {
            $this->couponService = $couponService;
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

            if (!Session::has('order')) {
                \Session::put('order', [
                    'title' => $service->title,
                    'price' => $service->price,
                    'product_desc' => $service->short_desc,
                    'currency' => 'usd',
                    'grand_total' => $service->price
                ]);
            }

            return view('guest.pages.order_requirements', compact('service'));
        }

        /**
         * @param OrderRequest $request
         * @param $service_slug
         * @return JsonResponse
         */
        public function store(OrderRequest $request, $service_slug)
        {
            $validated = $request->validated();
            $service = Service::getSlug($service_slug)->firstOrFail();
            $orderSession = Session::get('order');

            $serviceInfo = [
                'user_id' => Auth::user()->id,
                'service_id' => $service->id,
                'title' => $service->title,
                'short_desc' => Str::limit($service->short_desc),
            ];

            $sessionData = [
                'pay_amount' => $orderSession['grand_total'] ?? null,
                'applied_coupon' => $orderSession['coupon']['code'] ?? null,
                'discount' => $orderSession['coupon']['discount'] ?? null,
                'currency' => $orderSession['currency'] ?? 'USD',
            ];

            $billing = [
                'cus_name' => Auth::user()->name ?? '',
                'cus_email' => Auth::user()->email ?? '',
                'cus_add1' => Auth::user()->userDetails->address ?? ' ',
                'cus_postcode' => Auth::user()->userDetails->postal_code ?? '',
                'cus_country' => Auth::user()->userDetails->country ?? '',
                'cus_phone' => Auth::user()->userDetails->phone ?? ' ',
            ];


            $data = array_merge($validated, $serviceInfo, $sessionData, $billing);
            dd($data);
            $this->processOrder->setData($data);

            $payment_method = http_build_query(['payment_method' => $request->input('payment_method')]);
            return Response::json([
                'status' => 'success',
                'redirect_to' => route('guest.order.checkout', $payment_method)
            ]);
        }

        /**
         * @param CouponRequest $request
         * @return JsonResponse
         */
        public function checkCoupon(CouponRequest $request)
        {
            try {
                $request->validated();
                $this->couponService->getCoupon($request->validated());
                return response()->json([
                    'status' => 'success',
                    'message' => 'Coupon Applied'
                ]);
            } catch (\Exception $exception) {
                report($exception);
                return response()->json([
                    'status' => 'failed',
                    'message' => $exception->getMessage()
                ]);
            }
        }

        public function removeCoupon()
        {
            $this->couponService->removeCoupon();
        }

        /**
         * @return Application|Factory|View
         */
        public function confirmation(Request $request, $order_number)
        {
            if (!$request->hasValidSignature()) {
                abort(401);
            }
            $order = Order::query()->where('order_number', '=', $order_number)->first();
            return view('guest.pages.order-confirmation', compact('order'));
        }


        /**
         * @param Dropzone $dropzone
         * @param Request $request
         * @return JsonResponse|void
         */
        public function getMedia(Dropzone $dropzone, Request $request)
        {
            if ($request->get('request') === 'order_requirement_files') {
                return $dropzone->getMedia(Order::class, 'order_requirement', 'id');
            }
        }

        /**
         * @param Dropzone $dropzone
         * @return JsonResponse
         */
        public function storeMedia(Dropzone $dropzone): JsonResponse
        {
            return $dropzone->storeMedia();
        }

        /**
         * @param Dropzone $dropzone
         * @return JsonResponse
         */
        public function destroyMedia(Dropzone $dropzone): JsonResponse
        {
            return $dropzone->deleteMedia(Media::class, 'multiple_media', 'uuid', 'spatie');
        }
    }
