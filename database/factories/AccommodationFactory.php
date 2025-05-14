<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Hotel;
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
            //required fields
        ];
    }

    public function mombasa()
    {
        return $this->state([
        'description'=> $this->faker->sentence(),
        'category_tag'=> $this->faker->randomElement(['standard', 'executive']),
        'hotel_id'=>Hotel::where('tag','mombasa')->first()->id,
        'hotel_tag'=>'mombasa',
        'executive_tag'=> $this->faker->randomElement(['Deluxe Single','Deluxe Double', 'Deluxe Family']),
        'amenities'=> $this->faker->randomElement(['swimming pool', 'spa', 'gym']),
        ]);
    }

    public function voi()
    {
        return $this->state([
        'description'=> $this->faker->sentence(),
        'category_tag'=> $this->faker->randomElement(['standard', 'executive']),
        'hotel_id'=>Hotel::where('tag','voi')->first()->id,
        'hotel_tag'=>'voi',
        'executive_tag'=> $this->faker->randomElement(['Deluxe Single','Deluxe Double', 'Deluxe Family']),
        'amenities'=> $this->faker->randomElement(['swimming pool', 'spa', 'gym']),
        ]);
    }

     public function ngulia()
    {
        return $this->state([
        'description'=> $this->faker->sentence(),
        'category_tag'=> $this->faker->randomElement(['standard', 'executive']),
        'hotel_id'=>Hotel::where('tag','ngulia')->first()->id,
        'hotel_tag'=>'ngulia',
        'executive_tag'=> $this->faker->randomElement(['Deluxe Single','Deluxe Double', 'Deluxe Family']),
        'amenities'=> $this->faker->randomElement(['swimming pool', 'spa', 'gym']),
        ]);
    }
}
