<?php

    use App\Http\Controllers\Admin\Blog\BlogCategoryController;
    use App\Http\Controllers\Admin\Blog\BlogController;
    use App\Http\Controllers\Admin\Chat\DesignwalaChatController;
    use App\Http\Controllers\Admin\Chat\OrderChatController;
    use App\Http\Controllers\Admin\Client\ClientController;
    use App\Http\Controllers\Admin\Client\SubscriberController;
    use App\Http\Controllers\Admin\DashboardController;
    use App\Http\Controllers\Admin\Designwala\DesignwalaController;
    use App\Http\Controllers\Admin\Faq\FaqController;
    use App\Http\Controllers\Admin\Offer\AffiliateController;
    use App\Http\Controllers\Admin\Offer\CouponController;
    use App\Http\Controllers\Admin\Order\OrderController;
    use App\Http\Controllers\Admin\Order\PaymentController;
    use App\Http\Controllers\Admin\Promotion\AdvertisementBannerController;
    use App\Http\Controllers\Admin\Promotion\DraftMailController;
    use App\Http\Controllers\Admin\Promotion\EmailMarketingController;
    use App\Http\Controllers\Admin\Review\ReviewController;
    use App\Http\Controllers\Admin\Roles_and_permission\PermissionController;
    use App\Http\Controllers\Admin\Roles_and_permission\RoleController;
    use App\Http\Controllers\Admin\Service\ServiceCategoryController;
    use App\Http\Controllers\Admin\Service\ServiceController;
    use App\Http\Controllers\Admin\Service\TagController;
    use App\Http\Controllers\Admin\Settings\MaintenanceModeController;
    use App\Http\Controllers\Admin\Settings\SEOToolsController;
    use App\Http\Controllers\Admin\Settings\SiteCMSController;
    use App\Http\Controllers\Guest\Blog\GuestBlogController;
    use App\Http\Controllers\Guest\HomeController;
    use App\Http\Controllers\Guest\Search\GuestSearchController;
    use App\Http\Controllers\Guest\Service\Category\GuestServiceCategoryController;
    use App\Http\Controllers\Guest\Service\GuestServiceController;
    use App\Http\Controllers\TestController;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->middleware(['auth'])->name('dashboard');

    require __DIR__ . '/auth.php';


    /*
    |--------------------------------------------------------------------------
    | User Panel Routes
    |--------------------------------------------------------------------------
    */

    // Home Route Section
    Route::prefix('/')->name('guest.')->group(function () {
        // Home
        Route::get('/', [HomeController::class, 'index'])->name('home.index');
        Route::get('/search/services/', [GuestSearchController::class, 'index'])->name('search.index');

        // Single Category Page
        Route::prefix('/categories')->name('service_category.')->group(function () {
            Route::get('/{category_slug}', [GuestServiceCategoryController::class, 'index'])->name('index');
        });

        // Single Service Page
        Route::prefix('/services')->name('service.')->group(function () {
            Route::get('/{service_slug}', [GuestServiceController::class, 'index'])->name('index');
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
        Route::get('/blog', [GuestBlogController::class, 'index'])->name('blog.index');
        Route::get('/single-blog', [GuestBlogController::class, 'index'])->name('blog.show');
    });

    Route::prefix('/user')->name('user.')->middleware(['auth', 'verified'])->group(function () {
        Route::get('/dashboard', function (){
            return 'User Dashboard';
        })->name('dashboard');
    });

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Routes
    |--------------------------------------------------------------------------
    */
    // Dashboard Route Section
    Route::middleware([
        'auth',
        'role:super_admin|admin',
    ])->group(function () {
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

                    Route::get('/destroy-service-image/{id}',
                        [ServiceController::class, 'destroyServiceImage'])->name('destroyServiceImage');
                    Route::get('/destroy-service-feature/{id}',
                        [ServiceController::class, 'destroyServiceFeature'])->name('destroyServiceFeature');
                    Route::get('/destroy-service-faq/{id}',
                        [ServiceController::class, 'destroyServiceFaq'])->name('destroyServiceFaq');

                    Route::post('/store-service', [ServiceController::class, 'store'])->name('store');
                    Route::patch('/update-service/{id}', [ServiceController::class, 'update'])->name('update');
                    Route::get('/destroy-service/{id}', [ServiceController::class, 'destroy'])->name('destroy');
                });
                // Service Categories
                Route::prefix('/service-category')->name('category.')->group(function () {
                    Route::get('/', [ServiceCategoryController::class, 'index'])->name('index');
                    Route::get('/add-category', [ServiceCategoryController::class, 'create'])->name('create');
                    Route::get('/edit-category/{id}', [ServiceCategoryController::class, 'edit'])->name('edit');

                    Route::get('/destroy-category-faq/{id}', [
                        ServiceCategoryController::class,
                        'destroyServiceCategoryFaq'
                    ])->name('destroyServiceCategoryFaq');

                    Route::post('/store-category', [ServiceCategoryController::class, 'store'])->name('store');
                    Route::patch('/update-category/{id}', [ServiceCategoryController::class, 'update'])->name('update');
                    Route::get('/destroy-category/{id}',
                        [ServiceCategoryController::class, 'destroy'])->name('destroy');
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
                // Subscribers
                Route::prefix('/subscribers')->name('subscribers.')->group(function () {
                    Route::get('/', [SubscriberController::class, 'index'])->name('index');
                    Route::get('/destroy-subscriber/{id}', [SubscriberController::class, 'destroy'])->name('destroy');
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
                        Route::get('/',
                            [SEOToolsController::class, 'index_google_analytics'])->name('index_google_analytics');
                    });
                    Route::prefix('/open-graph')->name('open_graph.')->group(function () {
                        Route::get('/', [SEOToolsController::class, 'index_open_graph'])->name('index_open_graph');
                        Route::get('/edit-meta',
                            [SEOToolsController::class, 'edit_open_graph'])->name('edit_open_graph');
                    });
                });

                // Site CMS
                Route::prefix('/site-cms')->name('site_cms.')->group(function () {
                    Route::get('/', [SiteCMSController::class, 'index'])->name('index');
                    Route::get('/update-site-cms', [SiteCMSController::class, 'update'])->name('update');
                });

                // Site CMS
                Route::name('site_cms.')->group(function () {
                    // Brand Identity Section
                    Route::prefix('/brand-identity')->name('brand_identity.')->group(function () {
                        Route::get('/', [SiteCMSController::class, 'index_brand_identity'])->name('index');
                        Route::patch('/update-brand-identity',
                            [SiteCMSController::class, 'update_brand_identity'])->name('update');
                    });
                    // Banners
                    Route::prefix('/banners')->name('banner.')->group(function () {
                        Route::get('/', [SiteCMSController::class, 'index_banner'])->name('index');
                        Route::patch('/update-banners', [SiteCMSController::class, 'update_banner'])->name('update');
                    });
                    // Service Process Section
                    Route::prefix('/service-process')->name('service_process.')->group(function () {
                        Route::get('/', [SiteCMSController::class, 'index_service_process'])->name('index');
                        Route::patch('/update-service-process',
                            [SiteCMSController::class, 'update_service_process'])->name('update');
                    });
                    // How Designwala Works ?
                    Route::prefix('/how-designwala-works')->name('how_designwala_works.')->group(function () {
                        Route::get('/', [SiteCMSController::class, 'index_how_designwala_works'])->name('index');
                        Route::patch('/update-how-designwala-works',
                            [SiteCMSController::class, 'update_how_designwala_works'])->name('update');
                    });
                    // Statistics Section
                    Route::prefix('/statistics')->name('statistics.')->group(function () {
                        Route::get('/', [SiteCMSController::class, 'index_statistics'])->name('index');
                        Route::patch('/update-statistics',
                            [SiteCMSController::class, 'update_statistics'])->name('update');
                    });
                    // Footer Content
                    Route::prefix('/footer')->name('footer.')->group(function () {
                        Route::get('/', [SiteCMSController::class, 'index_footer'])->name('index');
                        Route::patch('/update-footer', [SiteCMSController::class, 'update_footer'])->name('update');
                    });
                    // Social Links
                    Route::prefix('/social-links')->name('social_link.')->group(function () {
                        Route::get('/', [SiteCMSController::class, 'index_social_links'])->name('index');
                        Route::get('/create-social-links',
                            [SiteCMSController::class, 'create_social_links'])->name('create');
                        Route::get('/edit-social-links/{id}',
                            [SiteCMSController::class, 'edit_social_links'])->name('edit');
                        Route::post('/store-social-links',
                            [SiteCMSController::class, 'store_social_links'])->name('store');
                        Route::patch('/update-social-links/{id}',
                            [SiteCMSController::class, 'update_social_links'])->name('update');
                        Route::get('/destroy-social-links/{id}',
                            [SiteCMSController::class, 'destroy_social_links'])->name('destroy');
                    });
                    // Policies
                    Route::prefix('/policies')->name('policy.')->group(function () {
                        Route::get('/', [SiteCMSController::class, 'index_policy'])->name('index');
                        Route::patch('/update-policies', [SiteCMSController::class, 'update_policy'])->name('update');
                    });
                    // Other Contents
                    Route::prefix('/other-contents')->name('other_content.')->group(function () {
                        Route::get('/', [SiteCMSController::class, 'index_other_content'])->name('index');
                        Route::patch('/update-other-contents',
                            [SiteCMSController::class, 'update_other_content'])->name('update');
                    });
                });
                // Maintenance Mode
                Route::prefix('/maintenance-mode')->name('maintenance.')->group(function () {
                    Route::get('/', [MaintenanceModeController::class, 'index'])->name('index');
                });
            });
        });
    });


    Route::prefix('/test')->name('test.')->group(function () {
        $roles = [
            'super_admin',
            'admin',
            'project_manager',
            'designwala',
            'user'
        ];
        $allExceptUser = \Arr::only($roles, [4]);
//        dd($allExceptUser);
//        Route::get('/', [TestController::class, 'index'])->name('index');
//        Route::patch('/update-test', [TestController::class, 'update'])->name('update');
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
