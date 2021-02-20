<?php

namespace Database\Seeders;

use App\Models\ServiceFeature;
use Illuminate\Database\Seeder;

class ServiceFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceFeature::factory(2500)->create();
    }
}
