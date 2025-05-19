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
           'name'=>$this->faker->randomElement(['Kaskazi Bar', 'Beach Bistro Bar', 'Pool Bar']),
            'description'=>'A bar located in Mombasa, known for its vibrant atmosphere and beachside views.',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'bar',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
        ];
    }

    public function mombasa(){
        return $this->state([
            'name'=>$this->faker->randomElement(['Kaskazi Bar', 'Beach Bistro Bar', 'Pool Bar']),
            'description'=>'A bar located in Mombasa, known for its vibrant atmosphere and beachside views.',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'bar',
            'hotel_id'=>Hotel::where('tag', 'mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
        ]);
    }

     public function ngulia(){
        return $this->state([
            'name'=>$this->faker->randomElement(['Leopard View Bar', 'Nyati Bar']),
            'description'=>'A jungle-inspired bar deep in the heart of Tsavo, where lantern-lit paths lead to bamboo huts, Afrobeat rhythms echo through the trees, and wild cocktails are crafted with a touch of bush magic.',
            'image1' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image2' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'image3' => 'images/vq2WLiy8twZCqLH5QmgzaAKNNKHaVR1uMoOZ7jeu.png',
            'service_tag'=>'bar',
            'hotel_id'=>Hotel::where('tag', 'ngulia')->first()->id,
            'hotel_tag'=>'ngulia',
        ]);
    }


}
