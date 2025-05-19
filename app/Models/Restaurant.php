<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /** @use HasFactory<\Database\Factories\RestaurantFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'description',
        'service_tag',
        'hotel_id',
        'hotel_tag',
        'capacity',
        'image1',
        'image2',
        'image3', 
        'operating_hours',
    ];
    
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
