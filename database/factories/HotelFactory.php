<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        ];
    }

    public function mombasa(){
        return $this->state([
            'name' => 'Mombasa Beach Hotel',
            'description' => 'Mombasa Beach Hotel is a captivating paradise nestled along the sun-kissed shores of Mombasa, Kenya. 
                We are honored that you have chosen to stay with us and look forward to providing you with a memorable experience. 
                This luxurious seaside retreat offers a harmonious blend of modern comfort and authentic coastal charm, promising an unforgettable escape for both
                leisure seekers and business travelers alike. From the first light of dawn to the tranquil sunset, 
                Mombasa Beach Hotel embodies the essence of coastal luxury, inviting you to unwind, explore, and create lasting
                memories in one of Kenya\'s most captivating destinations. This offers a journey into the heart of Swahili culture and heritage',
            'highlights' => 'Swahili cuisines,Mombasa Day tours,From thrilling water sports such as snorkeling,Jet skiing,Windsurfing along the picturesque coastline,
                            Beach games,leisurely walks $ Sandcastle building on the white sandy beach,
                            Pampering spa treatment,Unforgettable Swahili dining.',
            'location' => 'Coastal shores of Mombasa',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'tag'=>'mombasa',
        ]);
    }

    public function voi(){
        return $this->state([
            'name' => 'Voi Safari Lodge',
            'description' => 'Ngulia Safari Lodge, one of the properties owned and managed by Kenya Safari Lodges & Hotels Ltd (KSLH) was officially opened on May 22, 1969. 
                The Lodge is situated in one of the World’s Largest Game Park – the Tsavo West National Park, 
                on the edge of the Ndawe escarpment offering a vast panorama of Tsavo’s sweeping plains and volcanic landscape. 
                The serenity of the lodge makes it a perfect getaway with a clear view of mount kilimanjaro.',
            'highlights' => 'Amazing-Caves,Dinner at Mudanda Rock,Wild Animals Viewing,Mzima Springs',
            'location' => 'Tsavo east national park',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'tag'=>'voi',
        ]);
    }

     public function ngulia(){
        return $this->state([
            'name' => 'Ngulia Safari Lodge',
            'description' => 'Ngulia Safari Lodge, one of the properties owned and managed by Kenya Safari Lodges & Hotels Ltd (KSLH) was officially opened on May 22, 1969. 
                    The Lodge is situated in one of the World’s Largest Game Park – the Tsavo West National Park, 
                    on the edge of the Ndawe escarpment offering a vast panorama of Tsavo’s sweeping plains and volcanic landscape.  
                    The serenity of the lodge makes it a perfect getaway with a clear view of mount kilimanjaro.',
            'highlights' => 'Swimming pool,Japanese Massage,Guided nature walks,Hill climbing,Binocular overlooking the Ngulia Rhino Sanctuary',
            'location' => 'Tsavo West National Park',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'tag'=>'ngulia',
        ]);
    }
}
