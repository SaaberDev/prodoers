<?php

namespace Database\Seeders;

use App\Models\ServiceCategoryFaq;
use Illuminate\Database\Seeder;

class ServiceCategoryFaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceCategoryFaq::factory(60)->create();
    }
}
