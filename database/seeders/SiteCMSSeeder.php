<?php

namespace Database\Seeders;

use App\Models\SiteCMS;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SiteCMSSeeder extends Seeder
{
    /******************************
     * ::::::::::: Keys :::::::::::
     * :::::: Brand Identity ::::::
     * brand_headline
     * brand_tagline
     * home_page_banner
     * brand_logo
     * browser_favicon
     *
     * ::: Service Process :::
     * service_process_title_1 | service_process_title_2 | service_process_title_3
     * service_process_title_4 | service_process_title_5 | service_process_title_6
     * service_process_image_1 | service_process_image_2 | service_process_image_3
     * service_process_image_4 | service_process_image_5 | service_process_image_6
     *
     * ::: How designwala works :::
     * designwala_title_1 | designwala_title_2 | designwala_title_3
     * designwala_desc_1 | designwala_desc_2 | designwala_desc_3
     * designwala_image_1 | designwala_image_2 | designwala_image_3
     * designwala_video
     *
     * :::::: Blog Section ::::::::
     * blog_headline
     * blog_tagline
     *
     * :::::: Statistics ::::::::::
     * total_services
     * total_orders
     * total_designwalas
     * total_customers
     *
     * :::::::::: Footer ::::::::::
     * footer_payment_method
     * footer_logo
     * footer_copyright
     * footer_desc
     *
     * ::::::::: Policies :::::::::
     * policy_privacy
     * policy_cookie
     * policy_payment
     * policy_terms_and_conditions
     ******************************/
    public function run()
    {
        $longText = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).";
        $data = [
            // Brand Identity
            [
                'key' => 'brand_headline',
                'value' => 'Search Your Desired Services',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'brand_tagline',
                'value' => 'Stop wasting time on hassling, let professionals do your job.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'home_page_banner',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'brand_logo',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'browser_favicon',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Service Process
            // Service Process 1
            [
                'key' => 'service_process_title_1',
                'value' => 'Search Your Desired Services',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'service_process_image_1',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Service Process 2
            [
                'key' => 'service_process_title_2',
                'value' => 'Search Your Desired Services',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'service_process_image_2',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Service Process 3
            [
                'key' => 'service_process_title_3',
                'value' => 'Search Your Desired Services',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'service_process_image_3',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Service Process 4
            [
                'key' => 'service_process_title_4',
                'value' => 'Search Your Desired Services',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'service_process_image_4',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Service Process 5
            [
                'key' => 'service_process_title_5',
                'value' => 'Search Your Desired Services',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'service_process_image_5',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Service Process 6
            [
                'key' => 'service_process_title_6',
                'value' => 'Search Your Desired Services',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'service_process_image_6',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


            // How designwala works
            [
                'key' => 'designwala_title_1',
                'value' => 'Place Order',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'designwala_desc_1',
                'value' => $longText,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'designwala_image_1',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'designwala_title_2',
                'value' => 'Send your content',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'designwala_desc_2',
                'value' => $longText,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'designwala_image_2',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'designwala_title_3',
                'value' => 'Get your final delivery',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'designwala_desc_3',
                'value' => $longText,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'designwala_image_3',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'designwala_video',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Blog Section
            [
                'key' => 'blog_headline',
                'value' => 'Latest News',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'blog_tagline',
                'value' => 'Reference site about Lorem Ipsum, giving information',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Statistics
            [
                'key' => 'total_services',
                'value' => 35,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'total_orders',
                'value' => 1200,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'total_designwalas',
                'value' => 500,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'total_customers',
                'value' => 120,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Footer
            [
                'key' => 'footer_payment_method',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'footer_logo',
                'value' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'footer_copyright',
                'value' => 'Copyright ©2021 Designwala',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'footer_desc',
                'value' => $longText,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Policies
            [
                'key' => 'policy_privacy',
                'value' => $longText,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'policy_cookie',
                'value' => $longText,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'policy_payment',
                'value' => $longText,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'policy_terms_and_conditions',
                'value' => $longText,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($data as $site_cms) {
            SiteCMS::create($site_cms);
        }
    }
}
