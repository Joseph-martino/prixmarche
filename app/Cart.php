<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{User, Category, CartProduct};

class Cart extends Model
{
    protected $fillable = ["user_id"];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
