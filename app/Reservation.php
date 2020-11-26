<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Reservation extends Model
{
    protected $fillable = ["user_id", "reservation_status"];

}
