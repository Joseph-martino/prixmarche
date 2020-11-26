<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{Product, Reservation}; // j'importe les modèles qui ont une relation avec mon modèle courant (ici ReservationProduct)

class ReservationProduct extends Model
{
    protected $fillable = ["reservation_id", "product_id", "quantity"];
}
