<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hotel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bar>
 */
class BarFactory extends Factory
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

    public function mombasaKaskaziBar(){
        return $this->state([
            'name'=>'Kaskazi Bar',
              'description'=>'Our main bar offering a range of international and local drinks and a wide choice of ice cream flavors, cappuccino and Espresso coffee. 
                The ambience is relaxing and ideal for watching sports (live streaming or replays) and/or listening to good music.',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'bar',
            'operating_hours'=>'10:00 to 23:00hrs',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
        ]);
    }
    public function mombasaBeachBistroBar(){
        return $this->state([
            'name'=>'Beach Bistro Bar',
            'description'=>'The Beach Bistro Bar is our beachfront open-air bar surrounded with a stunning view of the Indian Ocean during sunrise, sun set, high & low tides, evening and afternoon (basically all day long!).
                The Carven: A part of the Beach Bistro Bar is ideals for functions and parties due to its enclosed cave like set-up.
                To complement services and function, it is also equipped with its own kitchen for convenience that meets our customers’ expectations',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'bar',
            'operating_hours'=>'10:00 to 8:00hrs',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
        ]);
    }
    public function mombasaPoolBar(){
        return $this->state([
            'name'=>'Pool Bar',
            'description'=>'Our poolside bar with a sun deck for that stunning view of the Indian Ocean. 
                It serves alcoholic & Non-alcoholic beverages.',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'bar',
            'operating_hours'=>'10.00am – 6.000pm every day of the week',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
        ]);
    }

     public function nguliaLeopardViewBar(){
        return $this->state([
            'name'=>'Leopard View Bar',
            'description'=>'open in the evenings before the arrival of the leopard from the wilderness. Guests can enjoy their meals as they watch the leopard feast, 
                other animals drink water and make love, and the birds compete in their melodies with access to a giant binoculars overlooking the Rhino sanctuary.',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'bar',
            'hotel_id'=>Hotel::where('tag', 'ngulia')->first()->id,
            'hotel_tag'=>'ngulia',
        ]);
    }
     public function nguliaNyatiBar(){
        return $this->state([
            'name'=>'Nyati Bar',
            'description'=>'We believe good drinks are at the heart of good pubs and our range of rare and unusual spirits are testament to that philosophy. We stock quality whiskies, 
                vodkas and rums from all over the world, not forgetting, of course, our amazing selection of gins! Bottoms up. 
                We use only the freshest seasonal ingredients',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'bar',
            'hotel_id'=>Hotel::where('tag', 'ngulia')->first()->id,
            'hotel_tag'=>'ngulia',
        ]);
    }
     public function voiMainBar(){
        return $this->state([
            'name'=>'Voi Main Bar',
            'description'=>'Elegantly positioned on the terrace, our main bar offers stunning views and a relaxed ambiance. 
                It’s the ideal place to sip your favorite drink while enjoying the fresh breeze and golden sunsets, 
                whether you\'re winding down your day or starting your evening in style.',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'bar',
            'operating_hours'=>'10.00am – 6.000pm every day of the week',
            'hotel_id'=>Hotel::where('tag', 'ngulia')->first()->id,
            'hotel_tag'=>'ngulia',
        ]);
    }
     public function voiPoolBar(){
        return $this->state([
            'name'=>'Voi Pool Bar',
            'description'=>'Conveniently nestled beside the sparkling swimming pool, our pool bar offers the perfect spot to unwind and refresh. 
                    Whether you\'re taking a break from a swim or simply soaking up the sun, enjoy a selection of chilled beverages and light bites in a relaxed, open-air setting just steps from the water.',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'bar',
            'operating_hours'=>'10.00am – 6.000pm every day of the week',
            'hotel_id'=>Hotel::where('tag', 'ngulia')->first()->id,
            'hotel_tag'=>'ngulia',
        ]);
    }
     public function voiHyraxBar(){
        return $this->state([
            'name'=>'Voi Hyrax Bar',
            'description'=>'Exclusively available for private functions, the Hyrax Bar offers an intimate and serene setting for your special gatherings. 
                Open daily from 10:00 AM to 6:00 PM, 
                it\'s the perfect venue for hosting memorable daytime events in a relaxed yet refined atmosphere.',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'bar',
            'operating_hours'=>'10.00am – 6.000pm every day of the week',
            'hotel_id'=>Hotel::where('tag', 'ngulia')->first()->id,
            'hotel_tag'=>'ngulia',
        ]);
    }




}
