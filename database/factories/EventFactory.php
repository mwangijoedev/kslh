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
            'name'=>'Mombasa Event Catalogue',
            'varieties' =>'Catering:Banguete:Corporate Event:Cocktail Party:Wedding:Birthday:Anniversary:Graduation:Baby Shower:Bridal Shower',
            'description' => 'Mombasa Beach Hotel has beautiful and spacious gardens /grounds, locations and beach space large to accommodate small, 
                medium, and large activities and functions: catering, banqueting, corporate events, cocktails, dinner/dances and weddings Team building 
                creatively and professionally structured team driven activities to meet the client’s specific objective over and above lots of fun either by 
                our experienced inhouse instructor or if preferred, a clients’ own contracted external instructor.',
            'categories' => 'Function,Recreation,Entertainment',
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
           'name'=>'Ngulia Event Catalogue',
            'varieties' =>'Catering:Banguete:Corporate Event:Cocktail Party:Wedding:Birthday:Anniversary:Graduation:Baby Shower:Bridal Shower',
            'description' => 'Ngulia Safari Lodge offers stunning, expansive gardens that provide the perfect backdrop for both intimate gatherings and grand events. 
                Whether it’s a wedding, AGM meeting, or any special occasion, our grounds are ideal for creating unforgettable moments. 
                Our experienced in-house team curates engaging activities tailored to meet your specific goals while ensuring plenty of fun. 
                Guests can also enjoy a range of recreational activities, including a refreshing swim, soothing Japanese massages, guided nature walks, 
                and hill climbing. For a unique experience, use our massive binoculars to spot wildlife at the Ngulia Rhino Sanctuary.',
            'categories' => 'Function,Recreation,Entertainment',
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
            'name'=>'Voi Event Catalogue',
            'varieties' =>'Mudanda rock-this rock towers above a natural dam which draws many elephants to slake their thirst every day. Most of voi safari lodge sundowner dinners and bush breakfasts are set- up on this rock.
                :Lugard falls-is where the galana river cascades over a series of rapids created by interestingly shaped rocks.
                :Yatta Plateau-One of the park’s most recognizable features is the yatta plateau which is the longest lava flow in the world, stretching for over 300km (185 miles)
                :Aruba Dam-The Park offers the quintessential safari experience, and the game viewing is usually best around water sources such as the Aruba Dam.',
            'description' => 'A visit to some of the greatest sites and wonders of the world.',
            'categories' => 'Function,Recreation,Entertainment',
            'service_tag' => 'event',
            'hotel_id' => Hotel::where('tag', 'voi')->first()->id,
            'hotel_tag' => 'voi',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
        ]);
    }
}
