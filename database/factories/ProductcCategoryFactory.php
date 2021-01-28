<?php

namespace Database\Factories;

use App\Models\ProductcCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductcCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductcCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_name' => $this->faker->word(),
            'description' => $this->faker->realText()
        ];
    }
}
