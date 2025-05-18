<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'service_tag',
        'category',
        'image',
        'capacity',
        'amenities',
        'hotel_id',
        'hotel_tag',
        'executive_type',
    ];


    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
}
