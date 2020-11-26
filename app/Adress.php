<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Adress extends Model
{
    protected $fillable = ["user_id", "adress", "city", "zip_code"];

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
