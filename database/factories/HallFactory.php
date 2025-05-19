<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hotel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hall>
 */
class HallFactory extends Factory
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
            'name'=>$this->faker->randomElement(['Pwani','Tsavo','Frangipani', 'Mombasa Lounge']),
            'description'=>'A state-of-the-art conferencing hall equipped with modern AV technology, ergonomic seating, and flexible layouts — perfect for corporate meetings, workshops,
             and executive retreats, all set against a backdrop of serene ambiance and professional hospitality.',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>100,
            'amenities'=>'High-speed Wi-Fi, surround sound system, HD projectors, video conferencing equipment, adjustable lighting, on-site catering services, breakout rooms, 
                air conditioning, whiteboards and markers, dedicated event support team.',

                
        ]);
    }

    public function ngulia(){
        return $this->state([
            'name'=>$this->faker->randomElement(['Ngulia Conferencing Hall']),
            'description'=>'A state-of-the-art conferencing hall equipped with modern AV technology, ergonomic seating, and flexible layouts — perfect for corporate meetings, workshops,
             and executive retreats, all set against a backdrop of serene ambiance and professional hospitality.',
            'hotel_id'=>Hotel::where('tag', 'ngulia')->first()->id,
            'hotel_tag'=>'ngulia',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>40,
            'amenities'=>'High-speed Wi-Fi, surround sound system, HD projectors, video conferencing equipment, adjustable lighting, on-site catering services, breakout rooms, 
                air conditioning, whiteboards and markers, dedicated event support team.',
                
        ]);
    }

    public function voi(){
        return $this->state([
            'name'=>$this->faker->randomElement(['Voi Conferencing Hall']),
            'description'=>'A state-of-the-art conferencing hall equipped with modern AV technology, ergonomic seating, and flexible layouts — perfect for corporate meetings, workshops,
             and executive retreats, all set against a backdrop of serene ambiance and professional hospitality.',
            'hotel_id'=>Hotel::where('tag', 'voi')->first()->id,
            'hotel_tag'=>'voi',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'conferencing',
            'capacity'=>50,
            'amenities'=>'High-speed Wi-Fi, surround sound system, HD projectors, video conferencing equipment, adjustable lighting, on-site catering services, breakout rooms, 
                air conditioning, whiteboards and markers, dedicated event support team.'
                
        ]);
    }




}
