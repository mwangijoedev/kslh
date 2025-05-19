<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
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
        'name'=> $this->faker->word(),
        'description'=> $this->faker->sentence(),
        'service_tag'=> $this->faker->randomElement(['accommodation']),
        'category'=> $this->faker->randomElement(['standard', 'executive']),
        'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'capacity'=> $this->faker->numberBetween(1, 4),
        'amenities'=> 'Wi-Fi, air conditioning, flat-screen TV, minibar, coffee maker, in-room safe, hairdryer, iron and ironing board, complimentary toiletries, desk, bathrobe, slippers, telephone, blackout curtains, room service, alarm clock, bottled water, reading lamps, wardrobe, and USB charging ports.',
        'hotel_id'=>Hotel::where('tag','mombasa')->first()->id,
        'hotel_tag'=>'ngulia',
        'executive_type'=> $this->faker->randomElement(['Deluxe Single','Deluxe Double', 'Deluxe Family']),
        ]);
    }

    public function voi()
    {
        return $this->state([
        'name'=> $this->faker->word(),
        'description'=> $this->faker->sentence(),
        'service_tag'=> $this->faker->randomElement(['accommodation']),
        'category'=> $this->faker->randomElement(['standard', 'executive']),
        'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'capacity'=> $this->faker->numberBetween(1, 4),
        'amenities'=> 'Wi-Fi, air conditioning, flat-screen TV, minibar, coffee maker, in-room safe, hairdryer, iron and ironing board, complimentary toiletries, desk, bathrobe, slippers, telephone, blackout curtains, room service, alarm clock, bottled water, reading lamps, wardrobe, and USB charging ports.',
        'hotel_id'=>Hotel::where('tag','voi')->first()->id,
        'hotel_tag'=>'ngulia',
        'executive_type'=> $this->faker->randomElement(['Deluxe Single','Deluxe Double', 'Deluxe Family']),
        ]);
    }

     public function ngulia()
    {
        return $this->state([
        'name'=> $this->faker->word(),
        'description'=> $this->faker->sentence(),
        'service_tag'=> $this->faker->randomElement(['accommodation']),
        'category'=> $this->faker->randomElement(['standard', 'executive']),
        'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        'capacity'=> $this->faker->numberBetween(1, 4),
        'amenities'=> 'Wi-Fi, air conditioning, flat-screen TV, minibar, coffee maker, in-room safe, hairdryer, iron and ironing board, complimentary toiletries, desk, bathrobe, slippers, telephone, blackout curtains, room service, alarm clock, bottled water, reading lamps, wardrobe, and USB charging ports.',
        'hotel_id'=>Hotel::where('tag','ngulia')->first()->id,
        'hotel_tag'=>'ngulia',
        'executive_type'=> $this->faker->randomElement(['Deluxe Single','Deluxe Double', 'Deluxe Family']),
        ]);
    }
}
