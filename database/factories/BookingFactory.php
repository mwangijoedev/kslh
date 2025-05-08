<?php

namespace Database\Factories;

use App\Models\Accommodation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_name'=>User::factory(),
            'user_id'=>User::factory(),
            'accommodation_name'=>"TEST",
            'accommodation_id'=>Accommodation::factory(),
            'price'=>1000,
            'points_earned'=>2,
            'status'=>'pending', 
        ];
    }
}
