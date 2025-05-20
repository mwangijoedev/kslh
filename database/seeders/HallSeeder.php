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
            Hall::factory(1)->mombasaBaobab1()->create();
            Hall::factory(1)->mombasaBaobab2()->create();
            Hall::factory(1)->mombasaBaobabSuite()->create();
            Hall::factory(1)->mombasaFrangipaniHall()->create();
            Hall::factory(1)->mombasaKisauniHall()->create();
            Hall::factory(1)->mombasaLounge()->create();
            Hall::factory(1)->mombasaMaxims1()->create();
            Hall::factory(1)->mombasaMaxims2()->create();
            Hall::factory(1)->mombasaMaximsSuite()->create();
            Hall::factory(1)->ngulia()->create();
            Hall::factory(1)->voi()->create();
    }
}
