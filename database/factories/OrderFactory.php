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
            'order_datetime' => $this->faker->dateTimeBetween($startDate = '-30 months', $endDate = 'now', $timezone = null) ,
            'is_delivered' => $this->faker->boolean(),
            'is_canceled' => $this->faker->boolean(),
            'user_id' => $this->faker->numberBetween(1, 200),
        ];
    }
}
