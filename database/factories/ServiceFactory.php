<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Tag;
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
            'price' => $this->faker->numberBetween(45.00, 100.00),
//            'thumbnail' => $this->faker->image('public/storage/admin_panel/services/thumbnail/', 337, 265,'cats', false),
            'thumbnail' => null,
            'service_desc' => $this->faker->text,
        ];
    }
}
