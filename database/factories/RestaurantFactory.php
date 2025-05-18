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

    public function mombasa(){
        return $this->state([
            'name'=> $this->faker->name(),
            'location'=> $this->faker->address(),
            'description'=> $this->faker->text(),
            'service_tag'=>$this->faker->randomElement(['dining']),
            'hotel_id'=>Hotel::where('tag','mombasa')->first()->id,
            'hotel_tag'=>'mombasa',
            'capacity'=> $this->faker->numberBetween(50, 200),
            'image'=> $this->faker->imageUrl(),
            'operating_hours'=> $this->faker->time() . ' - ' . $this->faker->time(),
        ]);
    }

     public function ngulia(){
        return $this->state([
            'name'=> $this->faker->name(),
            'location'=> $this->faker->address(),
            'description'=> $this->faker->text(),
            'service_tag'=>$this->faker->randomElement(['dining']),
            'hotel_id'=>Hotel::where('tag','ngulia')->first()->id,
            'hotel_tag'=>'ngulia',
            'capacity'=> $this->faker->numberBetween(50, 200),
            'image'=> $this->faker->imageUrl(),
            'operating_hours'=> $this->faker->time() . ' - ' . $this->faker->time(),
        ]);
    }

     public function voi(){
        return $this->state([
            'name'=> $this->faker->name(),
            'location'=> $this->faker->address(),
            'description'=> $this->faker->text(),
            'service_tag'=>$this->faker->randomElement(['dining']),
            'hotel_id'=>Hotel::where('tag','voi')->first()->id,
            'hotel_tag'=>'voi',
            'capacity'=> $this->faker->numberBetween(50, 200),
            'image'=> $this->faker->imageUrl(),
            'operating_hours'=> $this->faker->time() . ' - ' . $this->faker->time(),
        ]);
    }
}
