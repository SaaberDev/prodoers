<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => null,
            'service_id' => rand(1, 5),
            'order_number' => $this->faker->uuid,
            'requirements' => 'Recusandae Ea praes. Recusandae Ea praes. Recusandae Ea praes. ',
            'delivery_time' => '4',
            'applied_coupon' => '2222',
            'order_status' => $this->faker->randomElement(['pending', 'ongoing', 'delivered', 'in_revision', 'cancelled', 'completed']),
        ];
    }
}
