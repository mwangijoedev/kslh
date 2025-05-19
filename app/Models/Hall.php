<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    /** @use HasFactory<\Database\Factories\HallFactory> */
    use HasFactory;

    protected $fillale = [
        'name',
        'description',
        'hotel_id',
        'hotel_tag',
        'image1',
        'image2',
        'image3',
        'service_tag',
        'capacity',
        'amenities',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
