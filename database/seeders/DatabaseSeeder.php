<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceCategoryFaq;
use App\Models\ServiceFaq;
use App\Models\ServiceFeature;
use App\Models\ServiceImage;
use App\Models\User;
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
        User::factory(100)->create();
        ServiceCategory::factory(100)->create();
//        ServiceCategoryFaq::factory(20)->create();
        Service::factory(100)->create();
//        ServiceImage::factory(100)->create();
//        ServiceFeature::factory(20)->create();
//        ServiceFaq::factory(20)->create();
    }
}
