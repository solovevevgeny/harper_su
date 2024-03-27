<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(MenuSeeder::class);

        $this->call(CompanySeeder::class);
        $this->call(WarehouseSeeder::class);
        $this->call(PriceTypeSeeder::class);
        $this->call(ContactTypeSeeder::class);

        $this->call(ItemSeeder::class);
        $this->call(OfferSeeder::class);
        $this->call(PriceSeeder::class);

    }
}
