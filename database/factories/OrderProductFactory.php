<?php

namespace Database\Factories;

use App\Models\OrderProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity' =>$this->faker->numberBetween(1, 50),
            'order_id' =>$this->faker->numberBetween(1, 1000),
            'product_id' =>$this->faker->numberBetween(1, 500),
        ];
    }
}
