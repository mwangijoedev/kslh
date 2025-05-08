<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
       /** @use HasFactory<\Database\Factories\BookingFactory> */
       use HasFactory;

    //

    protected $fillable = [
        'user_name',
        'user_id',
        'accommodation_name',
        'accommodation_id',
        'price',
        'points_earned',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
