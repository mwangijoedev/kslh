<?php

namespace Database\Seeders;

use App\Models\Bar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Bar::factory(1)->mombasaBeachBistroBar()->create();
            Bar::factory(1)->mombasaKaskaziBar()->create();
            Bar::factory(1)->mombasaPoolBar()->create();
            Bar::factory(1)->nguliaLeopardViewBar()->create();
            Bar::factory(1)->nguliaNyatiBar()->create();
            Bar::factory(1)->voiHyraxBar()->create();
            Bar::factory(1)->voiMainBar()->create();
            Bar::factory(1)->voiPoolBar()->create();

    }
}
