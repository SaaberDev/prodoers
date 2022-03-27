<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_category_id' => ServiceCategory::factory(),
            'title' => $this->faker->company,
            'published_status' => '1',
            'popular_status' => '1',
            'meta_desc' => $this->faker->text,
            'short_desc' => $this->faker->text,
            'delivery_time' => rand(2, 5),
            'revision_limit' => rand(2, 5),
            'price' => $this->faker->numberBetween(95, 5000)
        ];
    }
}
