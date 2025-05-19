<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hall;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Hall::factory(1)->mombasa()->create();
            Hall::factory(1)->ngulia()->create();
            Hall::factory(1)->voi()->create();
    }
}
