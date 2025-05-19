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
        $this->call([
            Bar::factory()->mombasa()->create(),
            Bar::factory()->ngulia()->create(),
        ]);
    }
}
