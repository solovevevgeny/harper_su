<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

class MenuController extends Controller
{
    public function menuType($menu_type = 'main_menu') {
        $menu = Menu::where("menu_type","=", $menu_type)->orderBy("order","asc")->get();
        return response($menu, 200);
    }
}
