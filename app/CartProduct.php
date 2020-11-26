<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{Cart, Product};

class CartProduct extends Model
{
    protected $fillable = ["product_id", "cart_id", "quantity"];
}
