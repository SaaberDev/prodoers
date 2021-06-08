<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'invoice_id' => $this->faker->uuid,
            'billing_name' => $this->faker->name,
            'billing_company_name' => $this->faker->company,
            'billing_address' => $this->faker->address,
            'billing_phone' => $this->faker->phoneNumber,
            'billing_email' => $this->faker->companyEmail,
        ];
    }
}
