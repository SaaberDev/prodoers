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
            'popular_status' => $this->faker->numberBetween(0, 1),
            'published_status' => $this->faker->numberBetween(0, 1),
            'meta_desc' => $this->faker->text,
            'slug' => $this->faker->slug,
            'category_banner' => $this->faker->imageUrl($width = 640, $height = 480),
            'category_thumbnail' => $this->faker->imageUrl($width = 640, $height = 480),
            'desc' => $this->faker->text,
        ];
    }
}
