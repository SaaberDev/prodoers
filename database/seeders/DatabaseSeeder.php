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
        $this->call([
//            RolesAndPermissionsSeeder::class,
//            UserSeeder::class,
            TagSeeder::class,
            ServiceCategorySeeder::class,
//            ServiceImageSeeder::class,
            OrderSeeder::class,
            SiteCmsSeeder::class,
        ]);
    }
}
