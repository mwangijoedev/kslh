<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::factory()->mombasa()->count(1)->create();
        Event::factory()->ngulia()->count(1)->create();
        Event::factory()->voi()->count(1)->create();
    }
}
