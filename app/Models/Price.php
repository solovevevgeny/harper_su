<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Price_type;

class Price extends Model
{
    use HasFactory;

    public function price_type () {
        return $this->hasOne(Price_type::class, 'id', 'price_type_id');
    }

}
