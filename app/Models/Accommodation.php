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
        'description',
        'price',
        'package_type',
        'currency',
        'from',
        'to',
        'package_inclusions',
        'package_exclusions',
        // 'primary_photo',
        // 'secondary_photo',
        // 'secondary_photo2',
        'day1',
        'day2',
        'day3',
        'highlight1',
        'highlight2',
        'highlight3',
        'highlight4',
    ];
}
