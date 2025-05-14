<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hotel::factory()->mombasa()->count(1)->create();
        Hotel::factory()->ngulia()->count(1)->create();
        Hotel::factory()->voi()->count(1)->create();
    }
}
