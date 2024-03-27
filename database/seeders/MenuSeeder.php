<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu = new Menu();
        $menu->menu_type = "footer";
        $menu->title = "О компании";
        $menu->parent_id = 0;
        $menu->url = "/about";
        $menu->order = 10;
        $menu->save();
        
        $menu = new Menu();
        $menu->menu_type = "footer";
        $menu->title = "Запчасти";
        $menu->parent_id = 0;
        $menu->url = "/parts";
        $menu->order = 20;
        $menu->save();
        
        $menu = new Menu();
        $menu->menu_type = "footer";
        $menu->title = "Доставка";
        $menu->parent_id = 0;
        $menu->url = "/shipping";
        $menu->order = 30;
        $menu->save();
        

        $menu = new Menu();
        $menu->menu_type = "main";
        $menu->title = "Запчасти";
        $menu->parent_id = 0;
        $menu->url = "/shipping";
        $menu->order = 10;
        $menu->save();

        $menu = new Menu();
        $menu->menu_type = "main";
        $menu->title = "Услуги сервиса";
        $menu->parent_id = 0;
        $menu->url = "/service";
        $menu->order = 20;
        $menu->save();

        $menu = new Menu();
        $menu->menu_type = "main";
        $menu->title = "Доставка";
        $menu->parent_id = 0;
        $menu->url = "/shipping";
        $menu->order = 30;
        $menu->save();

        $menu = new Menu();
        $menu->menu_type = "main";
        $menu->title = "Вакансии";
        $menu->parent_id = 0;
        $menu->url = "/shipping";
        $menu->order = 30;
        $menu->save();

        $menu = new Menu();
        $menu->menu_type = "main";
        $menu->title = "Выкуп техники";
        $menu->parent_id = 0;
        $menu->url = "/buy";
        $menu->order = 40;
        $menu->save();


    }
}
