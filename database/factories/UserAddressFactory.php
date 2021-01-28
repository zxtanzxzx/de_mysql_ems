<?php

namespace Database\Factories;

use App\Models\UserAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'line_one' => $this->faker->streetAddress() . $this->faker->streetSuffix(),
            'postcode' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'country' => 'Malaysia',
            'is_shipping_address' => $this->faker->boolean(),
            'user_id' => $this->faker->numberBetween(1, 200),
        ];
    }
}
