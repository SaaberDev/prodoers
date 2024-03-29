<?php

    use App\Http\Controllers\Admin\Client\ClientController;
    use App\Http\Controllers\Admin\Client\SubscriberController;
    use App\Http\Controllers\Admin\DashboardController;
    use App\Http\Controllers\Admin\Doer\DoerController;
    use App\Http\Controllers\Admin\Offer\AffiliateController;
    use App\Http\Controllers\Admin\Offer\CouponController;
    use App\Http\Controllers\Admin\Order\AssignOrderController;
    use App\Http\Controllers\Admin\Order\OrderController;
    use App\Http\Controllers\Admin\Order\PaymentController;
    use App\Http\Controllers\Admin\Promotion\AdvertisementBannerController;
    use App\Http\Controllers\Admin\Promotion\DraftMailController;
    use App\Http\Controllers\Admin\Promotion\EmailMarketingController;
    use App\Http\Controllers\Admin\Review\ReviewController;
    use App\Http\Controllers\Admin\Service\ServiceCategoryController;
    use App\Http\Controllers\Admin\Service\ServiceController;
    use App\Http\Controllers\Admin\Service\TagController;
    use App\Http\Controllers\Admin\Settings\MaintenanceModeController;
    use App\Http\Controllers\Admin\Settings\SEOToolsController;
    use App\Http\Controllers\Admin\Settings\SiteCMSController;


    /*
    |--------------------------------------------------------------------------
    | Admin Panel Routes
    |--------------------------------------------------------------------------
    */

    Route::middleware([
//        'auth',
//        'role:super_admin|admin',
    ])->group(function () {
        Route::prefix('/dashboard')->name('super_admin.')->group(function () {
            // Dashboard
            Route::get('/', [DashboardController::class, 'super_admin'])->name('index');

            // Services Route Section
            Route::prefix('/services')->name('service.')->group(function () {
                // Services
                Route::name('self.')->group(function () {
                    Route::get('/', [ServiceController::class, 'index'])->name('index');
                    Route::get('/add-service', [ServiceController::class, 'create'])->name('create');
                    Route::get('/edit-service/{id}', [ServiceController::class, 'edit'])->name('edit');

                    Route::delete('/destroy-service-feature/{id}', [ServiceController::class, 'destroyFeature'])->name('destroyServiceFeature');
                    Route::delete('/destroy-service-faq/{id}', [ServiceController::class, 'destroyFaq'])->name('destroyServiceFaq');

                    Route::post('/store-service', [ServiceController::class, 'store'])->name('store');
                    Route::patch('/update-service/{id}', [ServiceController::class, 'update'])->name('update');
                    Route::delete('/destroy-service/{id}', [ServiceController::class, 'destroy'])->name('destroy');

                    // Dropzone Media Ajax
                    Route::get('/get-media', [ServiceController::class, 'getMedia'])->name('getMedia');
                    Route::post('/store-media', [ServiceController::class, 'storeMedia'])->name('storeMedia');
                    Route::delete('/delete-media', [ServiceController::class, 'destroyMedia'])->name('deleteMedia');
                });
                // Service Categories
                Route::prefix('/category')->name('category.')->group(function () {
                    Route::get('/', [ServiceCategoryController::class, 'index'])->name('index');
                    Route::get('/add-category', [ServiceCategoryController::class, 'create'])->name('create');
                    Route::get('/edit-category/{id}', [ServiceCategoryController::class, 'edit'])->name('edit');

                    Route::delete('/destroy-category-faq/{id}', [ServiceCategoryController::class, 'destroyFaq'])->name('destroyFaq');
                    Route::delete('/destroy-instruction/{id}', [ServiceCategoryController::class, 'destroyInstruction'])->name('destroyInstruction');

                    Route::post('/store-category', [ServiceCategoryController::class, 'store'])->name('store');
                    Route::patch('/update-category/{id}', [ServiceCategoryController::class, 'update'])->name('update');
                    Route::delete('/destroy-category/{id}', [ServiceCategoryController::class, 'destroy'])->name('destroy');

                    // Dropzone Media Ajax
                    Route::get('/get-media', [ServiceCategoryController::class, 'getMedia'])->name('getMedia');
                    Route::post('/store-media', [ServiceCategoryController::class, 'storeMedia'])->name('storeMedia');
                    Route::delete('/delete-media', [ServiceCategoryController::class, 'destroyMedia'])->name('deleteMedia');
                });
                // Tags
                Route::prefix('/tags')->name('tag.')->group(function () {
                    Route::get('/', [TagController::class, 'index'])->name('index');
                    Route::post('/store-tag', [TagController::class, 'store'])->name('store');
                    Route::get('/edit-tag/{id}', [TagController::class, 'edit'])->name('edit');
                    Route::patch('/update-tag/{id}', [TagController::class, 'update'])->name('update');
                    Route::delete('/destroy-tag/{id}', [TagController::class, 'destroy'])->name('destroy');
                });
            });

            // TODO -- Assign Order Process
            // Order Route Section
            Route::prefix('/orders')->name('order.')->group(function () {
                // Orders
                Route::name('self.')->group(function () {
                    Route::get('/', [OrderController::class, 'index'])->name('index');
                    Route::get('/show/{id}', [OrderController::class, 'show'])->name('show');
                    Route::get('/download-attachments/{id}', [OrderController::class, 'downloadZip'])->name('downloadZip');
                });

                // Orders
                Route::name('assignOrder.')->group(function () {
                    Route::patch('/assign-order/{id}', [AssignOrderController::class, 'update'])->name('update');
                });

                // Payments
                Route::prefix('/payments')->name('payment.')->group(function () {
                    Route::get('/', [PaymentController::class, 'index'])->name('index');
                    Route::get('/show', [PaymentController::class, 'show'])->name('show');
                });
            });

            // Client Route Section
            Route::prefix('/clients')->name('client.')->group(function () {
                // Clients
                Route::name('self.')->group(function () {
                    Route::get('/', [ClientController::class, 'index'])->name('index');
                    Route::get('/show', [ClientController::class, 'show'])->name('show');
                });
                // Subscribers
                Route::prefix('/subscribers')->name('subscriber.')->group(function () {
                    Route::get('/', [SubscriberController::class, 'index'])->name('index');
                    Route::get('/destroy-subscriber/{id}', [SubscriberController::class, 'destroy'])->name('destroy');
                });
            });

            // Reviews Route Section
            Route::prefix('/reviews')->name('review.')->group(function () {
                // Reviews
                Route::get('/', [ReviewController::class, 'index'])->name('index');
            });

            // Offers Route Section
            Route::prefix('/offers')->name('offer.')->group(function () {
                // Coupons
                Route::prefix('/coupons')->name('coupon.')->group(function () {
                    Route::get('/', [CouponController::class, 'index'])->name('index');
                    Route::get('/add-coupon', [CouponController::class, 'create'])->name('create');
                    Route::get('/edit-coupon', [CouponController::class, 'edit'])->name('edit');
                    Route::post('/store-coupon', [CouponController::class, 'store'])->name('store');
                });
                // Affiliates
                Route::prefix('/affiliates')->name('affiliate.')->group(function () {
                    Route::get('/', [AffiliateController::class, 'index'])->name('index');
                    Route::get('/add-affiliate', [AffiliateController::class, 'create'])->name('create');
                    Route::get('/edit-affiliate', [AffiliateController::class, 'edit'])->name('edit');
                });
            });

            // Promotions Route Section
            Route::prefix('/promotions')->name('promotion.')->group(function () {
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

            // Doers Route Section
            Route::prefix('/doers')->name('doer.')->group(function () {
                Route::get('/', [DoerController::class, 'index'])->name('index');
                Route::get('/show', [DoerController::class, 'show'])->name('show');
            });

            // Roles & Permissions Route Section
//        Route::prefix('roles-permissions')->name('roles_permissions.')->group(function () {
//            // Roles
//            Route::prefix('/roles')->name('role.')->group(function () {
//                Route::get('/', [RoleController::class, 'index'])->name('index');
//                Route::get('/add-role', [RoleController::class, 'create'])->name('create');
//                Route::get('/edit', [RoleController::class, 'edit'])->name('edit');
//            });
//            // Permissions
//            Route::prefix('/permissions')->name('permission.')->group(function () {
//                Route::get('/', [PermissionController::class, 'index'])->name('index');
//                Route::get('/show', [PermissionController::class, 'show'])->name('show');
//            });
//        });

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
                        Route::get('/create-social-links', [SiteCMSController::class, 'create_social_links'])->name('create');
                        Route::get('/edit-social-links/{id}', [SiteCMSController::class, 'edit_social_links'])->name('edit');
                        Route::post('/store-social-links', [SiteCMSController::class, 'store_social_links'])->name('store');
                        Route::patch('/update-social-links/{id}', [SiteCMSController::class, 'update_social_links'])->name('update');
                        Route::get('/destroy-social-links/{id}', [SiteCMSController::class, 'destroy_social_links'])->name('destroy');
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
