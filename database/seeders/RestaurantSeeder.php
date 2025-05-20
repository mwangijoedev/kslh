<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Restaurant::factory(1)->mombasaRestaurant()->create();
       Restaurant::factory(1)->mombasaBeachBistroKitchen()->create();
       Restaurant::factory(1)->mombasaGazeboRestaurant()->create();
       Restaurant::factory(1)->mombasaWellnessParlor()->create();
       Restaurant::factory(1)->ngulia()->create();
       Restaurant::factory(1)->voi()->create();
       
    }
}
