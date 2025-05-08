<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accommodation>
 */
class AccommodationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->randomElement([
                        'Valentine Package',
                        'Easter Package',
                        'Christmas Package',
                        'Mombasa Premium Package',
                        'Night Life Package',
                        'Ngulia 3 day Package',
                        'Voi Business Package'
                    ]),
            'price'=>fake()->randomElement(['197', '599', '798','422','548']),
            'currency'=>fake()->randomElement(['USD','EUR','KES']),
            'from'=>fake()->date(),       
            'to'=>fake()->date(), 
            'description'=>'Experience the perfect blend of luxury, relaxation, and adventure',
            'day1'=>fake()->randomElement([
                        'Arrive, welcome drink, sunset beach massage, candlelit beachfront dinner.',
                        'Arrive, champagne welcome, spa treatment, starlit fine dining.',
                        'Sunset game drive, photography workshop, night sky photography.',
                        'Arrive, bush trek, sundowner drinks, night safari.','Arrive, kid-friendly safari, bonfire storytelling.',
                        'Arrive, sunset game drive, bush dinner under the stars.'
                    ]),
        ];
    }
}
