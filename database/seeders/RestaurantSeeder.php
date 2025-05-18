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
       Restaurant::factory(10)->mombasa()->create();
       Restaurant::factory(10)->ngulia()->create();
       Restaurant::factory(10)->voi()->create();
       
    }
}
