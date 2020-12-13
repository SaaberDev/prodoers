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
    use App\Http\Controllers\admin_panel\promotions\DraftMailController;
    use App\Http\Controllers\admin_panel\promotions\EmailMarketingController;
    use App\Http\Controllers\admin_panel\reviews\ReviewController;
    use App\Http\Controllers\admin_panel\roles_and_permissions\PermissionController;
    use App\Http\Controllers\admin_panel\roles_and_permissions\RoleController;
    use App\Http\Controllers\admin_panel\services\ServiceCategoryController;
    use App\Http\Controllers\admin_panel\services\ServiceController;
    use App\Http\Controllers\admin_panel\settings\FooterSectionController;
    use App\Http\Controllers\admin_panel\settings\MaintenanceModeController;
    use App\Http\Controllers\admin_panel\settings\SEOToolsController;
    use App\Http\Controllers\admin_panel\settings\SiteCMSController;
    use App\Http\Controllers\admin_panel\settings\SitePolicyController;
    use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/
// Dashboard Route Section
    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });

// Services Route Section
    Route::name('services.')->group(function () {
        // Services
        Route::prefix('/services')->name('service.')->group(function () {
            Route::get('/', [ServiceController::class, 'index'])->name('index');
            Route::get('/add-service', [ServiceController::class, 'create'])->name('create');
            Route::get('/edit-service', [ServiceController::class, 'edit'])->name('edit');
        });
        // Service Categories
        Route::prefix('/service-category')->name('category.')->group(function () {
            Route::get('/', [ServiceCategoryController::class, 'index'])->name('index');
            Route::get('/add-category', [ServiceCategoryController::class, 'create'])->name('create');
            Route::get('/edit-category', [ServiceCategoryController::class, 'edit'])->name('edit');
        });
    });

// Chat Route Section
    Route::name('chats.')->group(function () {
        Route::prefix('/designwala-chat')->name('designwala_chat.')->group(function () {
            Route::get('/', [DesignwalaChatController::class, 'index'])->name('index');
        });
        Route::prefix('/order-chat')->name('order_chat.')->group(function () {
            Route::get('/', [OrderChatController::class, 'index'])->name('index');
        });
    });

// Order Route Section
    Route::name('orders.')->group(function () {
        // Orders
        Route::prefix('/orders')->name('order.')->group(function () {
            Route::get('/', [OrderController::class, 'index'])->name('index');
            Route::get('/show', [OrderController::class, 'show'])->name('show');
        });
        // Payments
        Route::prefix('/payments')->name('payment.')->group(function () {
            Route::get('/', [PaymentController::class, 'index'])->name('index');
            Route::get('/show', [PaymentController::class, 'show'])->name('show');
        });
    });

// Blog Route Section
    Route::name('blogs.')->group(function () {
        // Blogs
        Route::prefix('/blogs')->name('blog.')->group(function () {
            Route::get('/', [BlogController::class, 'index'])->name('index');
            Route::get('/add-blog', [BlogController::class, 'create'])->name('create');
            Route::get('/edit-blog', [BlogController::class, 'edit'])->name('edit');
            Route::get('/show', [BlogController::class, 'show'])->name('show');
        });
        // Blog Category
        Route::prefix('/category')->name('category.')->group(function () {
            Route::get('/', [BlogCategoryController::class, 'index'])->name('index');
            Route::get('/edit-category', [BlogCategoryController::class, 'edit'])->name('edit');
        });
    });

// Client Route Section
    Route::name('clients.')->group(function () {
        // Clients
        Route::prefix('/clients')->name('client.')->group(function () {
            Route::get('/', [ClientController::class, 'index'])->name('index');
            Route::get('/show', [ClientController::class, 'show'])->name('show');
        });
        // Payments
        Route::prefix('/subscribers')->name('subscribers.')->group(function () {
            Route::get('/', [SubscriberController::class, 'index'])->name('index');
        });
    });

// Reviews Route Section
    Route::prefix('/reviews')->name('reviews.')->group(function () {
        // Reviews
        Route::get('/', [ReviewController::class, 'index'])->name('index');
    });

// FAQ's Route Section
    Route::prefix('/faqs')->name('faqs.')->group(function () {
        // FAQ's
        Route::get('/', [FaqController::class, 'index'])->name('index');
        Route::get('/add-faq', [FaqController::class, 'create'])->name('create');
        Route::get('/edit-faq', [FaqController::class, 'edit'])->name('edit');
    });

// Offers Route Section
    Route::name('offers.')->group(function () {
        // Coupons
        Route::prefix('/coupons')->name('coupon.')->group(function () {
            Route::get('/', [CouponController::class, 'index'])->name('index');
            Route::get('/add-coupon', [CouponController::class, 'create'])->name('create');
            Route::get('/edit-coupon', [CouponController::class, 'edit'])->name('edit');
        });
        // Affiliates
        Route::prefix('/affiliates')->name('affiliate.')->group(function () {
            Route::get('/', [AffiliateController::class, 'index'])->name('index');
            Route::get('/add-affiliate', [AffiliateController::class, 'create'])->name('create');
            Route::get('/edit-affiliate', [AffiliateController::class, 'edit'])->name('edit');
        });
    });

// Promotions Route Section
    Route::name('promotions.')->group(function () {
        // Email Marketing
        Route::name('email_marketing.')->group(function () {
            Route::prefix('/all-mail')->name('all_mail.')->group(function () {
                Route::get('/', [EmailMarketingController::class, 'index'])->name('index');
                Route::get('/compose-mail', [EmailMarketingController::class, 'create'])->name('create');
                Route::get('/edit-mail', [EmailMarketingController::class, 'edit'])->name('edit');
            });

            Route::prefix('/drafts')->name('draft.')->group(function () {
                Route::get('/', [DraftMailController::class, 'index'])->name('index');
                Route::get('/edit-drafts', [DraftMailController::class, 'edit'])->name('edit');
            });
        });
        // Advertisement Banner
        Route::prefix('/advertisement-banner')->name('advertisement_banner.')->group(function () {
            Route::get('/', [AdvertisementBannerController::class, 'index'])->name('index');
            Route::get('/add-affiliate', [AdvertisementBannerController::class, 'create'])->name('create');
            Route::get('/edit-affiliate', [AdvertisementBannerController::class, 'edit'])->name('edit');
        });
    });

// Designwalas Route Section
    Route::name('designwalas.')->group(function () {
        // Designwalas
        Route::prefix('/designwalas')->name('designwala.')->group(function () {
            Route::get('/', [DesignwalaController::class, 'index'])->name('index');
            Route::get('/show', [DesignwalaController::class, 'show'])->name('show');
        });
    });

// Roles & Permissions Route Section
    Route::name('roles_permissions.')->group(function () {
        // Roles
        Route::prefix('/roles')->name('role.')->group(function () {
            Route::get('/', [RoleController::class, 'index'])->name('index');
            Route::get('/add-role', [RoleController::class, 'create'])->name('create');
            Route::get('/edit', [RoleController::class, 'edit'])->name('edit');
        });
        // Permissions
        Route::prefix('/permissions')->name('permission.')->group(function () {
            Route::get('/', [PermissionController::class, 'index'])->name('index');
            Route::get('/show', [PermissionController::class, 'show'])->name('show');
        });
    });

// Settings Route Section
    Route::name('settings.')->group(function () {
        // SEO Tools
        Route::name('seo_tools.')->group(function () {
            Route::prefix('/google-analytics')->name('google_analytics.')->group(function () {
                Route::get('/', [SEOToolsController::class, 'index_google_analytics'])->name('index_google_analytics');
            });
            Route::prefix('/open-graph')->name('open_graph.')->group(function () {
                Route::get('/', [SEOToolsController::class, 'index_open_graph'])->name('index_open_graph');
                Route::get('/edit-meta', [SEOToolsController::class, 'edit_open_graph'])->name('edit_open_graph');
            });
        });
        // Site CMS
        Route::prefix('/site-cms')->name('site_cms.')->group(function () {
            Route::get('/', [SiteCMSController::class, 'index'])->name('index');
        });
        // Policies
        Route::prefix('/policies')->name('policy.')->group(function () {
            Route::get('/', [SitePolicyController::class, 'index'])->name('index');
        });
        // Footer Section
        Route::name('footer_section.')->group(function () {
            Route::prefix('/footer')->name('footer.')->group(function () {
                Route::get('/', [FooterSectionController::class, 'index_footer'])->name('index');
                Route::get('/edit-footer', [FooterSectionController::class, 'edit_footer'])->name('edit');
            });
            Route::prefix('/social-links')->name('social_link.')->group(function () {
                Route::get('/', [FooterSectionController::class, 'index_social_links'])->name('index');
                Route::get('/edit-social-links', [FooterSectionController::class, 'edit_social_links'])->name('edit');
            });
        });
        // Maintenance Mode
        Route::prefix('/maintenance-mode')->name('maintenance.')->group(function () {
            Route::get('/', [MaintenanceModeController::class, 'index'])->name('index');
        });
    });

/*
|--------------------------------------------------------------------------
| User Panel Routes
|--------------------------------------------------------------------------
*/
