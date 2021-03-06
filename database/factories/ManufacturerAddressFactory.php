<?php

namespace Database\Factories;

use App\Models\ManufacturerAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManufacturerAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ManufacturerAddress::class;

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
            'country' => $this->faker->numberBetween(1, 100),
        ];
    }
}
