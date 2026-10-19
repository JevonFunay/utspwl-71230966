<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Item;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    protected $model = Sale::class;

    public function definition(): array
    {
        return [
            'date_of_purchase' => fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'customer_id' => Customer::factory(),
            'item_code' => Item::factory(),
        ];
    }
}
