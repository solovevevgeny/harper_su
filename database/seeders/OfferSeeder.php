<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Offer;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offer = new Offer();
        $offer->item_id = 1;
        $offer->comment = "новая(комментарий)";
        $offer->warehouse_id = 1;
        $offer->amount = 8;
        $offer->save();

    }
}
