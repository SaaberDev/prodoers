<?php
    return [
        'default' => [
            // Brand Identity
            'home_page_banner' => '_default/home-page-banner.svg',
            'brand_logo' => '_default/brand-logo.svg',
            'browser_favicon' => '_default/browser-favicon.png',
        ],
        'admin' => [
            'images' => [
                'store' => [
                    /*
                     | ------------------------> Services <------------------------
                     */
                    'services' => [
                        'service_image' => 'admin_panel/services/service_image/',
                        'thumbnails' => 'admin_panel/services/thumbnail/'
                    ],
                    /*
                     | ------------------------> Categories <------------------------
                     */
                    'categories' => [
                        'banner' => 'admin_panel/services_categories/banner/',
                        'thumbnails' => 'admin_panel/services_categories/thumbnail/',
                    ],
                    /*
                     | ------------------------> Site CMS <------------------------
                     */
                    'brand_identity' => [
                        'home_page_banner' => 'admin_panel/brand_identity/home_page_banner/',
                        'brand_logo' => 'admin_panel/brand_identity/brand_logo/',
                        'browser_favicon' => 'admin_panel/brand_identity/browser_favicon/',
                    ],
                    'footer' => [
                        'logo' => 'admin_panel/footer/logo/',
                        'payment_method' => 'admin_panel/footer/payment_method/',
                        'social_links' => 'admin_panel/footer/social_links/',
                    ]
                ],

                'show' => [
                    /*
                     | ------------------------> Services <------------------------
                     */
                    'services' => [
                        'service_image' => 'storage/admin_panel/services/service_image/',
                        'thumbnails' => 'storage/admin_panel/services/thumbnail/',
                    ],
                    /*
                     | ------------------------> Categories <------------------------
                     */
                    'categories' => [
                        'banner' => 'storage/admin_panel/services_categories/banner/',
                        'thumbnails' => 'storage/admin_panel/services_categories/thumbnail/',
                    ],

                    /*
                     | ------------------------> Site CMS <------------------------
                     */
                    'brand_identity' => [
                        'home_page_banner' => 'storage/admin_panel/brand_identity/home_page_banner/',
                        'brand_logo' => 'storage/admin_panel/brand_identity/brand_logo/',
                        'browser_favicon' => 'storage/admin_panel/brand_identity/browser_favicon/',
                    ],
                    'footer' => [
                        'logo' => 'storage/admin_panel/footer/logo/',
                        'payment_method' => 'storage/admin_panel/footer/payment_method/',
                        'social_links' => 'storage/admin_panel/footer/social_links/',
                    ]
                ],

            ]
        ],

    ];
