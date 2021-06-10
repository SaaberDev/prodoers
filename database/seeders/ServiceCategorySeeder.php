<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceCategoryFaq;
use App\Models\ServiceFaq;
use App\Models\ServiceFeature;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceCategory::factory()
            ->times(15)
            ->has(
                Service::factory()
                    ->count(3)
                    ->has(ServiceFaq::factory()->count(5), 'serviceFaqs')
                    ->has(ServiceFeature::factory()->count(6), 'serviceFeatures')
            )
            ->has(
                ServiceCategoryFaq::factory()->count(4), 'serviceCategoryFaqs'
            )
            ->create();
    }
}
