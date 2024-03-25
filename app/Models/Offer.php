<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Warehouse;
use App\Models\Price;

class Offer extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public function warehouse() {
        return $this->hasOne(Warehouse::class, 'id', 'warehouse_id');
    }

    public function prices() {
        return $this->hasMany(Price::class, 'offer_id', 'id');
    }

}
