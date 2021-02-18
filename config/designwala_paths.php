<?php
    return [
        'data' => [
            'value' => 'Hello'
        ],
        'default' => [
            // No Preview
            'no_preview' => '_default/no-preview-available.png'
        ],


        'store' => [
            /*
             | ------------------------> Services <------------------------
             */
            'services' => [
                'service_image' => 'public/images/services/service-image/',
                'thumbnail' => 'public/images/services/thumbnail/'
            ],
            /*
             | ------------------------> Service Categories <------------------------
             */
            'service_categories' => [
                'banner' => 'public/images/service-categories/banner/',
                'thumbnail' => 'public/images/service-categories/thumbnail/',
            ],
            /*
             | ------------------------> Site CMS <------------------------
             */
            'site_cms' => [
                'banner' => 'public/images/site-cms/banner/',
                'brand_icon' => 'public/images/site-cms/brand-icon/',
                'brand_logo' => 'public/images/site-cms/brand-logo/',
                'service_process' => 'public/images/site-cms/service-process/',
                'how_designwala_works' => 'public/images/site-cms/how-designwala-works/',
                'how_designwala_works_video' => 'public/images/site-cms/how-designwala-works/video/',
                'payment_method' => 'public/images/site-cms/payment-method/',
                'social_icon' => 'public/images/site-cms/social-icon/',
            ],
        ],

        'show' => [
            /*
             | ------------------------> Services <------------------------
             */
            'services' => [
                'service_image' => 'storage/images/services/service-image/',
                'thumbnail' => 'storage/images/services/thumbnail/',
            ],
            /*
             | ------------------------> Service Categories <------------------------
             */
            'service_categories' => [
                'banner' => 'storage/images/service-categories/banner/',
                'thumbnail' => 'storage/images/service-categories/thumbnail/',
            ],
            /*
             | ------------------------> Site CMS <------------------------
             */
            'site_cms' => [
                'banner' => 'storage/images/site-cms/banner/',
                'brand_icon' => 'storage/images/site-cms/brand-icon/',
                'brand_logo' => 'storage/images/site-cms/brand-logo/',
                'service_process' => 'storage/images/site-cms/service-process/',
                'how_designwala_works' => 'storage/images/site-cms/how-designwala-works/',
                'how_designwala_works_video' => 'storage/images/site-cms/how-designwala-works/video/',
                'payment_method' => 'storage/images/site-cms/payment-method/',
                'social_icon' => 'storage/images/site-cms/social-icon/',
            ],
        ],
    ];
