<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    /** @use HasFactory<\Database\Factories\BarFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'service_tag',
        'hotel_id',
        'hotel_tag', 
       ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
