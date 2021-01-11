<?php

namespace Database\Factories;

use App\Models\ServiceFeature;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFeatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceFeature::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_id' => $this->faker->numberBetween(1, 20),
            'feature_desc' => $this->faker->company,
        ];
    }
}
