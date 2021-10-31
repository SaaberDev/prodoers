<?php
    use App\Http\Controllers\Guest\HomeController;
    use App\Http\Controllers\Guest\Order\CheckoutController;
    use App\Http\Controllers\Guest\Order\GuestOrderController;
    use App\Http\Controllers\Guest\Search\GuestSearchController;
    use App\Http\Controllers\Guest\Service\Category\GuestServiceCategoryController;
    use App\Http\Controllers\Guest\Service\GuestServiceController;
    use App\Http\Controllers\TestController;
    use Illuminate\Support\Facades\Route;

    require __DIR__ . '/auth.php';

    /*
    |--------------------------------------------------------------------------
    | User Panel Routes
    |--------------------------------------------------------------------------
    */

    Route::get('/update-logs', function () {
//        $order = \App\Models\Order::findOrFail(60);
//        $order->assignOrders()
//            ->updateOrCreate(
//                ['order_id' => $order->id],
//                [
//                    'user_id' => 2,
//                    'status' => \App\Models\AssignOrder::CANCELLED
//                ]
//            );
    });

    // Home Route Section
    Route::prefix('/')->name('guest.')->group(function () {
        // Home
        Route::get('/', [HomeController::class, 'index'])->name('home.index');
        Route::get('/services', [GuestSearchController::class, 'index'])->name('search.index');

        // Single Category Page
        Route::prefix('/categories')->name('service_category.')->group(function () {
            Route::get('/{category_slug}', [GuestServiceCategoryController::class, 'index'])->name('index');
        });

        // Single Service Page
        Route::prefix('/services')->name('service.')->group(function () {
            Route::get('/{service_slug}', [GuestServiceController::class, 'index'])->name('index');
        });

        // Order
        Route::prefix('/services')->name('order.')
//            ->middleware('auth')
            ->group(function () {
                Route::get('/{service_slug}/order', [GuestOrderController::class, 'index'])->name('index');
                Route::get('/{service_slug}/order/pay', [GuestOrderController::class, 'store'])->name('store');

                Route::get('/pay', [CheckoutController::class, 'checkout'])->name('checkout');
                Route::any('/success', [CheckoutController::class, 'successCheckout'])->name('success');
                Route::any('/cancel', [CheckoutController::class, 'cancelCheckout'])->name('cancel');
                Route::any('/confirmation', [CheckoutController::class, 'confirmation'])->name('confirmation');
            });

        // Policies
        Route::name('policy.')->group(function () {
            Route::get('/privacy-policy', function () {
                return view('guest.pages.policies.privacy_policy');
            })->name('privacy');

            Route::get('/cookie-policy', function () {
                return view('guest.pages.policies.cookie_policy');
            })->name('cookie');

            Route::get('/payment-policy', function () {
                return view('guest.pages.policies.payment_policy');
            })->name('payment');

            Route::get('/terms-and-conditions', function () {
                return view('guest.pages.policies.terms_and_conditions');
            })->name('terms_and_conditions');
        });

        // Newsletter
//        Route::name('newsletter.')->group(function (){
//            Route::post('/store-newsletter', [GuestNewsletterController::class, 'store'])->name('store');
//        });


        // Order Details
//        Route::get('/order-details', [UserOrderDetailController::class, 'index'])->name('order_detail.index');
        // Blog
//        Route::get('/blog', [GuestBlogController::class, 'index'])->name('blog.index');
//        Route::get('/single-blog', [GuestBlogController::class, 'index'])->name('blog.show');
    });

    Route::prefix('/checkout')->name('checkout.')->group(function () {

    });
