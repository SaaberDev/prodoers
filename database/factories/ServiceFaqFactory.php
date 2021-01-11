<?php

namespace Database\Factories;

use App\Models\ServiceFaq;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFaqFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceFaq::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_id' => $this->faker->numberBetween(1, 20),
            'question' => $this->faker->sentence,
            'answer' => $this->faker->paragraph,
        ];
    }
}
