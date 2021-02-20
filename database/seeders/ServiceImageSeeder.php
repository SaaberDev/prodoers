<?php

namespace Database\Seeders;

use App\Models\ServiceImage;
use Illuminate\Database\Seeder;

class ServiceImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceImage::factory(100000)->create();
    }
}
