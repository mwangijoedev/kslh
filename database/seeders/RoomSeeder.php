<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::factory(1)->mombasaGardenFacing()->create();
        Room::factory(1)->mombasaPoolFacing()->create();
        Room::factory(1)->mombasaRestaurantFacing()->create();
        Room::factory(1)->mombasaSeaFacing()->create();
        Room::factory(1)->mombasaSuites()->create();
        Room::factory(1)->voi()->create();
        Room::factory(1)->ngulia()->create();
    }
}
