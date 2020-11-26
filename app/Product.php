<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $fillable = ["name", "price", "picture", "quantity", "category_id"];
}
