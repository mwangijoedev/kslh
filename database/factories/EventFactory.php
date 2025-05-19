<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hotel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }

    public function mombasa(){
        return $this->state([
            'name' => $this->faker->randomElement(['Catering','Banguete', 
                        'Corporate Event', 'Cocktail Party', 'Wedding', 'Birthday'
                        , 'Anniversary', 'Graduation', 'Baby Shower', 'Bridal Shower']),

            'description' => 'An engaging event bringing together participants for networking, learning, and entertainment, featuring guest speakers, 
                                interactive sessions, and memorable experiences tailored to both casual and professional audiences.',
            'type' => $this->faker->randomElement(['function', 'recreation', 'entertainment']),
            'service_tag' => 'event',
            'hotel_id' => Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag' => 'mombasa',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',

        ]);
    }

    public function ngulia(){
        return $this->state([
            'name' => $this->faker->randomElement(['Catering','Banguete', 
                        'Corporate Event', 'Cocktail Party', 'Wedding', 'Birthday'
                        , 'Anniversary', 'Graduation', 'Baby Shower', 'Bridal Shower']),

            'description' => 'An engaging event bringing together participants for networking, learning, and entertainment, featuring guest speakers, 
                                interactive sessions, and memorable experiences tailored to both casual and professional audiences.',
            'type' => $this->faker->randomElement(['function', 'recreation', 'entertainment']),
            'service_tag' => 'event',
            'hotel_id' => Hotel::where('tag', 'ngulia')->first()->id,
            'hotel_tag' => 'ngulia',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        ]);
    }

    public function voi(){
        return $this->state([
            'name' => $this->faker->randomElement(['Catering','Banguete', 
                        'Corporate Event', 'Cocktail Party', 'Wedding', 'Birthday'
                        , 'Anniversary', 'Graduation', 'Baby Shower', 'Bridal Shower']),

            'description' => 'An engaging event bringing together participants for networking, learning, and entertainment, featuring guest speakers, 
                                interactive sessions, and memorable experiences tailored to both casual and professional audiences.',
            'type' => $this->faker->randomElement(['function', 'recreation', 'entertainment']),
            'service_tag' => 'event',
            'hotel_id' => Hotel::where('tag', 'voi')->first()->id,
            'hotel_tag' => 'voi',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',

        ]);
    }
}
