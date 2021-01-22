<?php

namespace Database\Factories;

use App\Models\ServiceCategory;
use App\Models\ServiceCategoryFaq;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceCategoryFaqFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceCategoryFaq::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_category_id' => $this->faker->numberBetween(1, 100),
            'question' => $this->faker->sentence,
            'answer' => $this->faker->paragraph,
        ];
    }
}
