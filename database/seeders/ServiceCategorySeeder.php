<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceCategoryFaq;
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
        ServiceCategory::factory(15)
            ->has(Service::factory()->count(3))
            ->has(ServiceCategoryFaq::factory()->count(4))
            ->create();
    }
}
