<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Warehouse;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $warehouse = new Warehouse();
        $warehouse-> title = "Склад ХарПер - ЛО";
        $warehouse-> address = "Ленинградская область, Тосненский район, гп Федоровское, Первый Восточный проезд, дом 1";
        $warehouse->save();

        $warehouse = new Warehouse();
        $warehouse-> title = "Склад ХарПер - Москва";
        $warehouse-> address = "Москва, ул....";
        $warehouse->save();

    }
}
