<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hotel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
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

    public function mombasaRestaurant(){
        return $this->state([
            'name'=> 'Mombasa restaurant',
            'location'=> 'Coastal Shore of Mombasa',
            'description'=> 'Our main open-air restaurant where the coastal essence comes to life. 
                Sitting capacity of 120pax offering exceptional buffet style cuisines and entertainment during meal times.',
            'service_tag'=>$this->faker->randomElement(['dining']),
            'hotel_id'=>Hotel::where('tag','mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'capacity'=> 120,
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'operating_hours'=> 'Breakfast 7:00 AM - 9:30 AM, Lunch: 12:30 PM - 2:30 PM,
                Dinner: 7:30 PM - 9:30 PM',
        ]);
    }
    public function mombasaGazeboRestaurant(){
        return $this->state([
            'name'=> 'Gazebo restaurant',
            'location'=> 'Coastal Shore of Mombasa',
            'description'=> 'Our intimate restaurant offering Ala-Carte Services from a rich menu option with both international and local cuisines 
                and a personalized chefs’ touch to match your specific taste.',
            'service_tag'=>$this->faker->randomElement(['dining']),
            'hotel_id'=>Hotel::where('tag','mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'capacity'=> $this->faker->numberBetween(50, 200),
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'operating_hours'=> 'Breakfast 7:00 AM - 9:30 AM, Lunch: 12:30 PM - 2:30 PM,
                Dinner: 7:30 PM - 9:30 PM',
        ]);
    }
    public function mombasaWellnessParlor(){
        return $this->state([
            'name'=> 'Wellness parlor',
            'location'=> 'Coastal Shore of Mombasa',
            'description'=> 'Our unique wellness station offering an organic range of fresh juice combinations, salads and healthy teas and snacks.',
            'service_tag'=>$this->faker->randomElement(['dining']),
            'hotel_id'=>Hotel::where('tag','mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'capacity'=> $this->faker->numberBetween(50, 200),
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'operating_hours'=> 'Breakfast 7:00 AM - 9:30 AM, Lunch: 12:30 PM - 2:30 PM,
                Dinner: 7:30 PM - 9:30 PM',
        ]);
    }
    public function mombasaBeachBistroKitchen(){
        return $this->state([
            'name'=> 'Beach Bistro Kitchen',
            'location'=> 'Coastal Shore of Mombasa',
            'description'=> 'Located at the beach-front, the kitchen complements the breach bistro bar & gardens with 
                sumptuous array of bitings, chomas, mushkakis and platters while enjoying the afternoon or evening cold drinks watching the tides rise.',
            'service_tag'=>$this->faker->randomElement(['dining']),
            'hotel_id'=>Hotel::where('tag','mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'capacity'=> $this->faker->numberBetween(50, 200),
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'operating_hours'=> 'Breakfast 7:00 AM - 9:30 AM, Lunch: 12:30 PM - 2:30 PM,
                Dinner: 7:30 PM - 9:30 PM',
        ]);
    }

     public function ngulia(){
        return $this->state([
            'name'=> 'Ngulia Safari Lodge Restaurant',
            'location'=> 'Tsavo West National Park',
            'description'=> 'A main restaurants built in an open-air style, has a view of floodlit water holes. All meals are served buffet style. 
                Optional arrangements can be made for Bush breakfast, Sundowner dinners and picnic lunch boxes.',
            'service_tag'=>$this->faker->randomElement(['dining']),
            'hotel_id'=>Hotel::where('tag','ngulia')->first()->id,
            'hotel_tag'=>'ngulia',
            'capacity'=> $this->faker->numberBetween(50, 200),
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'operating_hours'=> 'Breakfast 7:00 AM - 9:30 AM, Lunch: 12:30 PM - 2:30 PM,
                Dinner: 7:30 PM - 9:30 PM',
        ]);
    }

     public function voi(){
        return $this->state([
            'name'=> 'Ngulia Safari Lodge Restaurant',
            'location'=>'Tsavo east national park',
            'description'=>'A main restaurants built in an open-air style, has a view of floodlit water holes. 
                All meals are served buffet style. Optional arrangements can be made for Bush breakfast, 
                Sundowner dinners and picnic lunch boxes.',
            'service_tag'=>$this->faker->randomElement(['dining']),
            'hotel_id'=>Hotel::where('tag','voi')->first()->id,
            'hotel_tag'=>'voi',
            'capacity'=> $this->faker->numberBetween(50, 200),
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'operating_hours'=> 'Breakfast 7:00 AM - 9:30 AM, Lunch: 12:30 PM - 2:30 PM,
                Dinner: 7:30 PM - 9:30 PM',
        ]);
    }
}
