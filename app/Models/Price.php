<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Price_type;

class Price extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public function price_type () {
        return $this->hasOne(Price_type::class, 'id', 'price_type_id');
    }

}
