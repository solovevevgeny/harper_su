<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = new Item();
        $item->title = "Головка блока (с клапанами)";
        $item->article = "1482144";
        $item->crosses = "J1482144 148-2144 1337052 133-7052 2166951 216-6951 179-9458 1799458 10R8888 10R-8888";
        $item->comment = "CAT C12 C12 9NS C12 MBL C10 3176 В сборе с клапанами дл 115,выc 25,шир 38";
        $item->save();
        
        
    }
}
