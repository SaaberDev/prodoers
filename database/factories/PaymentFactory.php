<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => rand(1, 10),
            'paid_amount' => 100,
            'transaction_id' => $this->faker->uuid,
            'payment_method' => $this->faker->randomElement(['paypal', 'visa', 'bkash', 'mastercard']),
            'payment_status' => $this->faker->randomElement(['paid', 'failed'])
        ];
    }
}
