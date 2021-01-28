<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->word(),
            'product_description' => $this->faker->word(),
            'price_per_unit' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'manufacturer_id' => $this->faker->numberBetween(1,100),
            'product_category_id' => $this->faker->numberBetween(1,20),
            'discount' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1),
        ];
    }
}
