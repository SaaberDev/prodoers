<?php

namespace Database\Factories;

use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'popular_status' => '1',
            'published_status' => '1',
            'meta_desc' => $this->faker->text,
            'category_banner' => 'default.png',
            'category_thumbnail' => 'default.png',
            'desc' => $this->faker->text,
        ];
    }
}
