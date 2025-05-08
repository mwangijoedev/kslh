<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    /** @use HasFactory<\Database\Factories\AccommodationFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'currency',
        'from',
        'to',
        'description',
        'day1',
    ];
}
