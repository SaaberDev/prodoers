<?php

namespace Database\Seeders;

use App\Models\BannerSection;
use App\Models\BlogSection;
use App\Models\BrandIdentity;
use App\Models\CompanyPolicy;
use App\Models\FooterContent;
use App\Models\HowDesignwalaWork;
use App\Models\ServiceProcess;
use App\Models\SiteCMS;
use App\Models\StatisticsSection;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SiteCmsSeeder extends Seeder
{
    public function run()
    {
        $longText = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).";
        $brand_identities = [
            [
                'company_name' => 'Search Your Desired Services',
                'slogan' => 'Stop wasting time on hassling, let professionals do your job',
                'logo' => null,
                'favicon' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        foreach ($brand_identities as $brand_identity) {
            BrandIdentity::create($brand_identity);
        }

        $home_banners = [
            [
                'key' => 'banner_home_page',
                'headline' => 'Search Your Desired Services',
                'tagline' => 'Stop wasting time on hassling, let professionals do your job',
                'banner' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'key' => 'banner_not_found_page',
                'headline' => 'Okay',
                'tagline' => 'Stop wasting time on hassling, let professionals do your job',
                'banner' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'key' => 'banner_maintenance_page',
                'headline' => 'Noooo',
                'tagline' => 'Stop wasting time on hassling, let professionals do your job',
                'banner' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        foreach ($home_banners as $home_banner) {
            BannerSection::create($home_banner);
        }

        $service_processes = [
            [
                'key' => 'service_process_1',
                'title' => 'Cheap and Reliable',
                'image' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'key' => 'service_process_2',
                'title' => '100% Quality Concerned',
                'image' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'key' => 'service_process_3',
                'title' => 'Excellent Collaboration with Client',
                'image' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'key' => 'service_process_4',
                'title' => 'Ensure 100% Client Satisfaction',
                'image' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'key' => 'service_process_5',
                'title' => '24/7 Live Support',
                'image' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'key' => 'service_process_6',
                'title' => 'Quick Delivery',
                'image' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        foreach ($service_processes as $service_process) {
            ServiceProcess::create($service_process);
        }

        $how_designwala_works = [
            [
                'key' => 'step_1',
                'title' => 'Pick a Service',
                'desc' => 'Choose a service & Prepare your requirements',
                'image' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'key' => 'step_2',
                'title' => 'Place Order',
                'desc' => 'Make Payment & Place Order',
                'image' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'key' => 'step_3',
                'title' => 'Get Delivery',
                'desc' => 'Get Delivery Within the 3 Working days',
                'image' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'key' => 'dw_video',
                'video' => null,
                'video_thumbnail' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        foreach ($how_designwala_works as $how_designwala_work) {
            HowDesignwalaWork::create($how_designwala_work);
        }

        $statistics = [
            [
                'key' => 'stat_1_total_services',
                'title' => 'Total Services',
                'amount' => 150,
                'icon' => null,
            ],
            [
                'key' => 'stat_2_total_orders',
                'title' => 'Total Orders',
                'amount' => 2600000,
                'icon' => null,
            ],
            [
                'key' => 'stat_3_total_designwalas',
                'title' => 'Total Designwalas',
                'amount' => 200,
                'icon' => null,
            ],
            [
                'key' => 'stat_4_total_customers',
                'title' => 'Total Customers',
                'amount' => 150,
                'icon' => null,
            ],
        ];
        foreach ($statistics as $statistic) {
            StatisticsSection::create($statistic);
        }

        $footer_contents = [
            [
                'logo' => null,
                'payment_method' => null,
                'desc' => $longText,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        foreach ($footer_contents as $footer_content) {
            FooterContent::create($footer_content);
        }

        $company_policies = [
            [
                'privacy' => 'Company Privacy Policy',
                'cookie' => 'Company Cookie Policy',
                'payment' => 'Company Payment Policy',
                'terms_and_conditions' => 'Company Terms and Conditions',
            ]
        ];
        foreach ($company_policies as $policy) {
            CompanyPolicy::create($policy);
        }






        /*$data = [
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
                'value' => 'Cheap and Reliable',
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
                'value' => '100% Quality Concerned',
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
                'value' => 'Excellent Collaboration with Client',
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
                'value' => 'Ensure 100% Client Satisfaction',
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
                'value' => '24/7 Live Support',
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
                'value' => 'Quick Delivery',
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
                'value' => 'Pick a Service',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'designwala_desc_1',
                'value' => 'Choose a service & Prepare your requirements',
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
                'value' => 'Place Order',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'designwala_desc_2',
                'value' => 'Make Payment & Place Order',
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
                'value' => 'Get Delivery',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'designwala_desc_3',
                'value' => 'Get Delivery Within the 3 Working days',
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
            [
                'key' => 'designwala_video_thumbnail',
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
        ];*/

        /*foreach ($data as $site_cms) {
            SiteCMS::create($site_cms);
        }*/
    }
}
