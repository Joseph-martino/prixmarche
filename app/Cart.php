<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{User, Category, CartProduct};

class Cart extends Model
{
    protected $fillable = ["user_id"];
}
