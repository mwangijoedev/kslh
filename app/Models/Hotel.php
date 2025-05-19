<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
use App\Models\Restaurant;
use App\Models\Bar;
use App\Models\Hall;
use App\Models\Event;


class Hotel extends Model
{
    /** @use HasFactory<\Database\Factories\HotelFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image1',
        'image2',
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

    public function bars()
    {
        return $this->hasMany(Bar::class);
    }

    public function halls()
    {
        return $this->hasMany(Hall::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
    
}
