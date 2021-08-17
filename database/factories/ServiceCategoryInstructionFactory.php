<?php

namespace Database\Factories;

use App\Models\ServiceCategoryInstruction;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceCategoryInstructionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceCategoryInstruction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_category_id' => rand(1, 10),
            'order_instructions' => $this->faker->sentence(),
        ];
    }
}
