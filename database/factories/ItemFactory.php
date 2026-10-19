<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    protected $model = Item::class;

    public function definition(): array
    {
        return [
            'item_code' => fake()->unique()->regexify('ITM-[A-Z0-9]{10}'),
            'item' => fake()->words(3, true),
            'unit_price' => fake()->randomFloat(2, 1000, 1000000),
            'company_id' => Company::factory(),
        ];
    }
}
