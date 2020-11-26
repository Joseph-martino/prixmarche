<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{Cart, Product};

class CartProduct extends Model
{
    protected $fillable = ["product_id", "cart_id", "quantity"];

    public function cart(){
        return $this->belongsTo(Cart::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
