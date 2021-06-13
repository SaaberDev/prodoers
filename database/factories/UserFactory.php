<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $designations = ['laravel web developer', 'php developer', 'logo designer', 'digital marketer', 'web designer', 'wordpress developer'];
        return [
            'name' => $this->faker->name,
            'designation' => $designations[array_rand($designations)],
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$12$OUkIqlif6L9kvxw.lGdfj.umD9EL94ED.guvGQW.lPOxWBNLf6GsC ', // password -> '123456'
            'remember_token' => Str::random(64),
        ];
    }
}
