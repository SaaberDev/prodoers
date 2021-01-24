<?php
    return [
        'admin' => [
            'images' => [
                'store' => [
                    'services' => [
                        'service_image' => 'admin_panel/services/service_image/',
                        'thumbnails' => 'admin_panel/services/thumbnail/'
                    ],
                    'categories' => [
                        'banner' => 'admin_panel/services_categories/banner/',
                        'thumbnails' => 'admin_panel/services_categories/thumbnail/',
                    ],
                    'footer' => [
                        'logo' => 'admin_panel/footer/logo/',
                        'payment_method' => 'admin_panel/footer/payment_method/',
                    ]
                ],

                'show' => [
                    'services' => [
                        'service_image' => 'storage/admin_panel/services/service_image/',
                        'thumbnails' => 'storage/admin_panel/services/thumbnail/',
                    ],
                    'categories' => [
                        'banner' => 'storage/admin_panel/services_categories/banner/',
                        'thumbnails' => 'storage/admin_panel/services_categories/thumbnail/',
                    ],
                    'footer' => [
                        'logo' => 'storage/admin_panel/footer/logo/',
                        'payment_method' => 'storage/admin_panel/footer/payment_method/',
                    ]
                ],

            ]
        ],

    ];
