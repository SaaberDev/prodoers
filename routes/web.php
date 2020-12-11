<?php

    use App\Http\Controllers\admin_panel\blogs\BlogCategoryController;
    use App\Http\Controllers\admin_panel\blogs\BlogController;
    use App\Http\Controllers\admin_panel\chats\DesignwalaChatController;
    use App\Http\Controllers\admin_panel\chats\OrderChatController;
    use App\Http\Controllers\admin_panel\clients\ClientController;
    use App\Http\Controllers\admin_panel\clients\SubscriberController;
    use App\Http\Controllers\admin_panel\DashboardController;
    use App\Http\Controllers\admin_panel\designwalas\DesignwalaController;
    use App\Http\Controllers\admin_panel\faqs\FaqController;
    use App\Http\Controllers\admin_panel\offers\AffiliateController;
    use App\Http\Controllers\admin_panel\offers\CouponController;
    use App\Http\Controllers\admin_panel\orders\OrderController;
    use App\Http\Controllers\admin_panel\orders\PaymentController;
    use App\Http\Controllers\admin_panel\promotions\AdvertisementBannerController;
    use App\Http\Controllers\admin_panel\promotions\EmailMarketingController;
    use App\Http\Controllers\admin_panel\reviews\ReviewController;
    use App\Http\Controllers\admin_panel\services\ServiceCategoryController;
    use App\Http\Controllers\admin_panel\services\ServiceController;
    use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/
$dashboardPrefix = ['/dashboard', '/admin'];
foreach ($dashboardPrefix as $administrator) {
    Route::prefix($administrator)->name('dashboard.')->group( function (){
        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });
}

// Services Route Section
Route::name('services.')->group(function (){
    // Services
    Route::prefix('/services')->name('service.')->group(function (){
        Route::get('/', [ServiceController::class, 'index'])->name('index');
        Route::get('/add-service', [ServiceController::class, 'create'])->name('create');
        Route::get('/edit-service', [ServiceController::class, 'edit'])->name('edit');
    });
    // Service Categories
    Route::prefix('/service-category')->name('category.')->group(function (){
        Route::get('/', [ServiceCategoryController::class, 'index'])->name('index');
        Route::get('/add-category', [ServiceCategoryController::class, 'create'])->name('create');
        Route::get('/edit-category', [ServiceCategoryController::class, 'edit'])->name('edit');
    });
});

// Chat Route Section
Route::name('chats.')->group(function (){
    Route::prefix('/designwala-chat')->name('designwala_chat.')->group(function (){
        Route::get('/', [DesignwalaChatController::class, 'index'])->name('index');
    });
    Route::prefix('/order-chat')->name('order_chat.')->group(function (){
        Route::get('/', [OrderChatController::class, 'index'])->name('index');
    });
});

// Order Route Section
Route::name('orders.')->group(function (){
    // Orders
    Route::prefix('/orders')->name('order.')->group(function (){
        Route::get('/', [OrderController::class, 'index'])->name('index');
        Route::get('/show', [OrderController::class, 'show'])->name('show');
    });
    // Payments
    Route::prefix('/payments')->name('payment.')->group(function (){
        Route::get('/', [PaymentController::class, 'index'])->name('index');
        Route::get('/show', [PaymentController::class, 'show'])->name('show');
    });
});

// Blog Route Section
Route::name('blogs.')->group(function (){
    // Blogs
    Route::prefix('/blogs')->name('blog.')->group(function (){
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/add-blog', [BlogController::class, 'create'])->name('create');
        Route::get('/edit-blog', [BlogController::class, 'edit'])->name('edit');
        Route::get('/show', [BlogController::class, 'show'])->name('show');
    });
    // Blog Category
    Route::prefix('/category')->name('category.')->group(function (){
        Route::get('/', [BlogCategoryController::class, 'index'])->name('index');
        Route::get('/edit-category', [BlogCategoryController::class, 'edit'])->name('edit');
    });
});

// Client Route Section
Route::name('clients.')->group(function (){
    // Clients
    Route::prefix('/clients')->name('client.')->group(function (){
        Route::get('/', [ClientController::class, 'index'])->name('index');
        Route::get('/show', [ClientController::class, 'show'])->name('show');
    });
    // Payments
    Route::prefix('/subscribers')->name('subscribers.')->group(function (){
        Route::get('/', [SubscriberController::class, 'index'])->name('index');
        Route::get('/show', [SubscriberController::class, 'show'])->name('show');
    });
});

// Reviews Route Section
Route::prefix('/reviews')->name('reviews.')->group(function (){
    // Reviews
    Route::get('/', [ReviewController::class, 'index'])->name('index');
});

// FAQ's Route Section
Route::prefix('/faqs')->name('faqs.')->group(function (){
    // FAQ's
    Route::get('/', [FaqController::class, 'index'])->name('index');
    Route::get('/add-faq', [FaqController::class, 'create'])->name('create');
    Route::get('/edit-faq', [FaqController::class, 'edit'])->name('edit');
});

// Offers Route Section
Route::name('offers.')->group(function (){
    // Coupons
    Route::prefix('/coupons')->name('coupon.')->group(function (){
        Route::get('/', [CouponController::class, 'index'])->name('index');
        Route::get('/add-coupon', [CouponController::class, 'create'])->name('create');
        Route::get('/edit-coupon', [CouponController::class, 'edit'])->name('edit');
    });
    // Affiliates
    Route::prefix('/affiliates')->name('affiliate.')->group(function (){
        Route::get('/', [AffiliateController::class, 'index'])->name('index');
        Route::get('/add-affiliate', [AffiliateController::class, 'create'])->name('create');
        Route::get('/edit-affiliate', [AffiliateController::class, 'edit'])->name('edit');
    });
});

// Promotions Route Section
Route::name('promotions.')->group(function (){
    // Email Marketing
    Route::prefix('/email-marketing')->name('email_marketing.')->group(function (){
        Route::get('/', [EmailMarketingController::class, 'index'])->name('index');
        Route::get('/compose-mail', [EmailMarketingController::class, 'create'])->name('create');
        Route::get('/edit-mail', [EmailMarketingController::class, 'edit'])->name('edit');
        Route::get('/drafts', [EmailMarketingController::class, 'drafts'])->name('drafts');
    });
    // Advertisement Banner
    Route::prefix('/advertisement-banner')->name('advertisement_banner.')->group(function (){
        Route::get('/', [AdvertisementBannerController::class, 'index'])->name('index');
        Route::get('/add-affiliate', [AdvertisementBannerController::class, 'create'])->name('create');
        Route::get('/edit-affiliate', [AdvertisementBannerController::class, 'edit'])->name('edit');
    });
});

// Designwalas Route Section
Route::name('designwalas.')->group(function (){
    // Email Marketing
    Route::prefix('/designwalas')->name('designwala.')->group(function (){
        Route::get('/', [DesignwalaController::class, 'index'])->name('index');
        Route::get('/show', [DesignwalaController::class, 'show'])->name('show');
    });
});

/*
|--------------------------------------------------------------------------
| User Panel Routes
|--------------------------------------------------------------------------
*/
