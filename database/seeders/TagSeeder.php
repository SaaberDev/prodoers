<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['laravel', 'php', 'logo-design', 'digital-marketing', 'web-design', 'wordpress'];
        collect($tags)->each(function ($tag){
            Tag::factory()->create([
                'title' => $tag
            ]);
        });
    }
}
