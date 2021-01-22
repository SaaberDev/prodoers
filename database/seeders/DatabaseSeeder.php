<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceCategoryFaq;
use App\Models\ServiceFaq;
use App\Models\ServiceFeature;
use App\Models\ServiceImage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \Artisan::call('directory:delete');
        \Artisan::call('directory:make');
        /**
         * User
         */
//        User::factory(100)->create();

        /**
         * Service Categories
         */
        ServiceCategory::factory(100)->create();
        ServiceCategoryFaq::factory(600)->create();

        /**
         * Service
         */
        Service::factory(100)->create();
        ServiceImage::factory(100)->create();
        ServiceFeature::factory(500)->create();
        ServiceFaq::factory(600)->create();
    }
}
