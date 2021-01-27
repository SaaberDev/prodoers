<?php

namespace Database\Seeders;

use App\Models\Policy;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * :::: Keys ::::
         * policy_privacy
         * policy_cookie
         * policy_payment
         * policy_terms_and_conditions
         */
        $longText = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).";
        $data = [
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
        ];
        foreach ($data as $policy) {
            Policy::create($policy);
        }
    }
}
