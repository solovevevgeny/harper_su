<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Offer;

class Item extends Model
{
    use HasFactory;
    protected $hidden = ['created_at', 'updated_at'];

    public function Offers() {
        return $this->hasMany(Offer::class, 'item_id', 'id');
    }

}
