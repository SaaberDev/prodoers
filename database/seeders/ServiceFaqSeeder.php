<?php

namespace Database\Seeders;

use App\Models\ServiceFaq;
use Illuminate\Database\Seeder;

class ServiceFaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceFaq::factory(100000)->create();
    }
}
