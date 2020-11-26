<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ["last_name", "first_name", "mail", "phone"];
    protected $guarded = ["admin", "password"];
}
