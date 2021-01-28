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
        return [
            'name' => $this->faker->name,
            'ic' => $this->faker->unique()->numberBetween(111111111111, 999999999999),
            'email' => $this->faker->unique()->safeEmail,
            'hp' => $this->faker->phoneNumber(),
            'tel' => $this->faker->fixedLineNumber(),
            'credit_limit' => $this->faker->numberBetween(1000, 5000),
            'outstanding_charges' => $this->faker->numberBetween(100, 1000),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
