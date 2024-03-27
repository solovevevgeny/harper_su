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
        $menu->position = 10;
        $menu->save();
        
        $menu = new Menu();
        $menu->menu_type = "footer";
        $menu->title = "Запчасти";
        $menu->parent_id = 0;
        $menu->url = "/parts";
        $menu->position = 20;
        $menu->save();
        
        $menu = new Menu();
        $menu->menu_type = "footer";
        $menu->title = "Доставка";
        $menu->parent_id = 0;
        $menu->url = "/shipping";
        $menu->position = 30;
        $menu->save();
        

        $menu = new Menu();
        $menu->menu_type = "main";
        $menu->title = "Запчасти";
        $menu->parent_id = 0;
        $menu->url = "/shipping";
        $menu->position = 10;
        $menu->save();

        $menu = new Menu();
        $menu->menu_type = "main";
        $menu->title = "Услуги сервиса";
        $menu->parent_id = 0;
        $menu->url = "/service";
        $menu->position = 20;
        $menu->save();

        $menu = new Menu();
        $menu->menu_type = "main";
        $menu->title = "Доставка";
        $menu->parent_id = 0;
        $menu->url = "/shipping";
        $menu->position = 30;
        $menu->save();

        $menu = new Menu();
        $menu->menu_type = "main";
        $menu->title = "Вакансии";
        $menu->parent_id = 0;
        $menu->url = "/shipping";
        $menu->position = 30;
        $menu->save();

        $menu = new Menu();
        $menu->menu_type = "main";
        $menu->title = "Выкуп техники";
        $menu->parent_id = 0;
        $menu->url = "/buy";
        $menu->position = 40;
        $menu->save();


    }
}
