<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Price_type;

class PriceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $price_type = new Price_type();
        $price_type->title = "Розничная";
        $price_type->save();
        
        $price_type = new Price_type();
        $price_type->title = "Оптовая";
        $price_type->save();

        $price_type = new Price_type();
        $price_type->title = "Партнерская";
        $price_type->save();

        
    }
}
