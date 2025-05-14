<?php

namespace Database\Seeders;

use App\Models\Accommodation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Accomodation;

class AccomodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Accommodation::factory(10)->mombasa()->create();
        Accommodation::factory(10)->voi()->create();
        Accommodation::factory(10)->ngulia()->create();
    }
}
