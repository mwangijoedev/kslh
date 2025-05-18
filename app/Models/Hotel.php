<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    /** @use HasFactory<\Database\Factories\HotelFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'higlights',
        'location',
        'tag',
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }
    
}
