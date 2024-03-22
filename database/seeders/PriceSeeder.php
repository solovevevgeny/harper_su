<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Price;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $price = new Price();
        $price->offer_id = 1;
        $price->price_type_id = 1; // розница
        $price->price = 292500; 
        $price->save();
        
        $price = new Price();
        $price->offer_id = 1;
        $price->price_type_id = 2; // оптовая
        $price->price = 263250; // - 10%
        $price->save();

        $price = new Price();
        $price->offer_id = 1;
        $price->price_type_id = 3; // партнерская
        $price->price = 236400; // - 20%
        $price->save();

    }
}
