<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class ItemsController extends Controller
{
    public function index() {
        $items = Item::where("active", "=", 1)->get();
        if (count($items)) {
            return response($items, 200);
        }
        else {
            return response([],404);
        }
    }

    public function withOffers() {
        $items = Item::with(['Offers', 'Offers.warehouse', 'Offers.prices'])->get();
        return response($items);
    }

}
