<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type',
        'service_tag',
        'hotel_id',
        'hotel_tag',
        'image1',
        'image2',
        'image3',
    ];
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
