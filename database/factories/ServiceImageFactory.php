<?php

namespace Database\Factories;

use App\Models\ServiceImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_id' => $this->faker->numberBetween(1, 100),
//            'filename' => $this->faker->image('public/storage/admin_panel/services/service_image/',636,486, 'technics', false),
            'filename' => 'default.jpg',
        ];
    }
}
