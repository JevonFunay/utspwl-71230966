<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Sale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Customer::factory()->count(max(0, 10 - Customer::count()))->create();

        Company::factory()->count(max(0, 10 - Company::count()))->create();

        Item::factory()
            ->count(max(0, 10 - Item::count()))
            ->recycle(Company::all())
            ->create();

        Sale::factory()
            ->count(max(0, 10 - Sale::count()))
            ->recycle(Customer::all())
            ->recycle(Item::all())
            ->create();
    }
}
