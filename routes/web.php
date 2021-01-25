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
    use App\Http\Controllers\admin_panel\services\TagController;
    use App\Http\Controllers\admin_panel\settings\FooterSectionController;
    use App\Http\Controllers\admin_panel\settings\MaintenanceModeController;
    use App\Http\Controllers\admin_panel\settings\SEOToolsController;
    use App\Http\Controllers\admin_panel\settings\SiteCMSController;
    use App\Http\Controllers\admin_panel\settings\SitePolicyController;
    use App\Http\Controllers\guest\blog\GuestBlogController;
    use App\Http\Controllers\guest\HomeController;
    use App\Http\Controllers\guest\search\GuestSearchController;
    use App\Http\Controllers\guest\service\category\GuestServiceCategoryController;
    use App\Http\Controllers\guest\service\GuestServiceController;
    use Illuminate\Support\Facades\Route;


    /*
    |--------------------------------------------------------------------------
    | User Panel Routes
    |--------------------------------------------------------------------------
    */
    // Home Route Section
    Route::prefix('/')->name('guest.')->group(function () {
        // Home
        Route::get('/', [HomeController::class, 'index'])->name('home.index');
//        Route::get('/search/{category_slug}', [GuestSearchController::class, 'index'])->name('search.index');
        Route::get('/search/services/', [GuestSearchController::class, 'index'])->name('search.index');

        // Single Category Page
        Route::prefix('/categories')->name('service_category.')->group(function (){
            Route::get('/{category_slug}', [GuestServiceCategoryController::class, 'index'])->name('index');
        });

        // Single Service Page
        Route::prefix('/services')->name('service.')->group(function (){
            Route::get('/{service_slug}', [GuestServiceController::class, 'index'])->name('index');
        });


//        Route::get('services/{service_slug}', [HomeController::class, 'single_service'])->name('single_service.show');

        // Single Service Page
//        Route::get('/{slug}', [UserServiceController::class, 'index'])->name('single_service.index');

        // Order Details
//        Route::get('/order-details', [UserOrderDetailController::class, 'index'])->name('order_detail.index');
        // Blog
        Route::get('/blog', [GuestBlogController::class, 'index'])->name('blog.index');
        Route::get('/single-blog', [GuestBlogController::class, 'index'])->name('blog.show');
    });




    /*
    |--------------------------------------------------------------------------
    | Admin Panel Routes
    |--------------------------------------------------------------------------
    */
// Dashboard Route Section
    Route::prefix('/dashboard')->group(function () {
        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

// Services Route Section
        Route::name('services.')->group(function () {
            // Services
            Route::prefix('/services')->name('service.')->group(function () {
                Route::get('/', [ServiceController::class, 'index'])->name('index');
                Route::get('/add-service', [ServiceController::class, 'create'])->name('create');
                Route::get('/edit-service/{id}', [ServiceController::class, 'edit'])->name('edit');

                Route::get('/destroy-service-image/{id}', [ServiceController::class, 'destroyServiceImage'])->name('destroyServiceImage');
                Route::get('/destroy-service-feature/{id}', [ServiceController::class, 'destroyServiceFeature'])->name('destroyServiceFeature');
                Route::get('/destroy-service-faq/{id}', [ServiceController::class, 'destroyServiceFaq'])->name('destroyServiceFaq');

                Route::post('/store-service', [ServiceController::class, 'store'])->name('store');
                Route::patch('/update-service/{id}', [ServiceController::class, 'update'])->name('update');
                Route::get('/destroy-service/{id}', [ServiceController::class, 'destroy'])->name('destroy');
            });
            // Service Categories
            Route::prefix('/service-category')->name('category.')->group(function () {
                Route::get('/', [ServiceCategoryController::class, 'index'])->name('index');
                Route::get('/add-category', [ServiceCategoryController::class, 'create'])->name('create');
                Route::get('/edit-category/{id}', [ServiceCategoryController::class, 'edit'])->name('edit');

                Route::get('/destroy-category-faq/{id}', [ServiceCategoryController::class, 'destroyServiceCategoryFaq'])->name('destroyServiceCategoryFaq');

                Route::post('/store-category', [ServiceCategoryController::class, 'store'])->name('store');
                Route::patch('/update-category/{id}', [ServiceCategoryController::class, 'update'])->name('update');
                Route::get('/destroy-category/{id}', [ServiceCategoryController::class, 'destroy'])->name('destroy');
            });
            // Tags
            Route::prefix('/tags')->name('tag.')->group(function () {
                Route::get('/', [TagController::class, 'index'])->name('index');
                Route::get('/edit-tag/{id}', [TagController::class, 'edit'])->name('edit');
                Route::get('/destroy-tag/{id}', [TagController::class, 'destroy'])->name('destroy');
                Route::post('/store-tag', [TagController::class, 'store'])->name('store');
                Route::patch('/update-tag/{id}', [TagController::class, 'update'])->name('update');
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
                    Route::patch('/update-footer', [FooterSectionController::class, 'update_footer'])->name('update');
                });
                Route::prefix('/social-links')->name('social_link.')->group(function () {
                    Route::get('/', [FooterSectionController::class, 'index_social_links'])->name('index');
                    Route::get('/create-social-links', [FooterSectionController::class, 'create_social_links'])->name('create');
                    Route::post('/store-social-links', [FooterSectionController::class, 'store_social_links'])->name('store');
                    Route::get('/edit-social-links', [FooterSectionController::class, 'edit_social_links'])->name('edit');
                    Route::get('/update-social-links', [FooterSectionController::class, 'update_social_links'])->name('update');
                });
            });
            // Maintenance Mode
            Route::prefix('/maintenance-mode')->name('maintenance.')->group(function () {
                Route::get('/', [MaintenanceModeController::class, 'index'])->name('index');
            });
        });
    });

    Route::get('/test', function (){
//        $inputs = (new CreateComponent());
//        dd($inputs);

//        $services = Service::orderByIdDesc()->with('servicesImages')->get();
//        foreach ($services as $service){
//            dd(json_decode($service->servicesImages));
//        }

//        $m = \App\Models\ServiceImage::get();
//        foreach ($m as  $k)
//        $d = json_decode($k->filename);
//        foreach ($d as $r){
//            dd($r);
//        }
//        print $d[0];


//            ->paginate();

    });

//    Route::get('/{category_name}', [UserServiceCategoryController::class, 'show'])->name('show');
//    Route::get('/{category_name}/{service_name}', [UserServiceCategoryController::class, 'show'])->name('show');
//    Route::get('/search?=logo', [UserServiceSearchController::class, 'index'])->name('index');

//    Route::get('/image', function (){
//        $service_categories = ServiceCategory::find(1);
//        $imgCache = ImageManagerStatic::cache(function($image) use ($service_categories) {
//            $image->make(Storage::get('public/admin_panel/services_categories/banner/' . $service_categories->category_banner));
//            $image->encode('webp', 100);
//        }, 10, true);
//
//        return ImageManagerStatic::make($imgCache)->response();
//    });

