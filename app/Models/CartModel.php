<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DishModel;

class CartModel extends Model
{
    use HasFactory;
    protected $table ='cart_models';

    public function dish()
    {
        return $this->belongsTo(DishModel::class,'dish_id','id');
    }
}
