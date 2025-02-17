<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotelrank extends Model
{
    use HasFactory;

    protected $fillable =[
        'name'
    ];

    public function accommodations(){
        return $this->belongsToMany(Accommodation::class);
    }
}
