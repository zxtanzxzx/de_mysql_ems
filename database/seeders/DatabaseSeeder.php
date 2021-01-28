<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\ProductcCategory::factory(20)->create();
        // \App\Models\User::factory(20)->create();
        // \App\Models\Manufacturer::factory(20)->create();
        // \App\Models\Product::factory(20)->create();
        // \App\Models\Order::factory(200)->create();
        // \App\Models\OrderProduct::factory(20)->create();
        // \App\Models\UserAddress::factory(200)->create();
        // \App\Models\ManufacturerAddress::factory(20)->create();


        \App\Models\User::factory(200)->create();
        \App\Models\Manufacturer::factory(100)->create();
        \App\Models\ProductcCategory::factory(20)->create();
        \App\Models\Product::factory(500)->create();
        \App\Models\Order::factory(1000)->create();
        \App\Models\OrderProduct::factory(5000)->create();
        \App\Models\UserAddress::factory(5000)->create();
        \App\Models\ManufacturerAddress::factory(5000)->create();
    }
}
