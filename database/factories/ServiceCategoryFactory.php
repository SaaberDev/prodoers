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
            'navbar_status' => '0',
            'popular_status' => '1',
            'published_status' => '1',
            'meta_desc' => $this->faker->text,
            'short_desc' => $this->faker->text,
            'order_instruction_desc' => $this->faker->text,
        ];
    }
}
