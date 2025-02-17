<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Review;
use App\Models\Deal;
use App\Models\Property;
use App\Models\Amenitie;
use App\Models\Popular;
use App\Models\Hotelrank;
use App\Models\Style;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'cost',
        'photo',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function deals(){
        return $this->belongsToMany(Deal::class);
    }

    public function assets(){
        return $this->belongsToMany(Asset::class);
    }
    
    public function amenities(){
        return $this->belongsToMany(Amenitie::class);
    }
    public function populars(){
        return $this->belongsToMany(Popular::class);
    }
    public function hotelranks(){
        return $this->belongsToMany(Hotelrank::class);
    }
    public function styles(){
        return $this->belongsToMany(Style::class);
    }
    
}
