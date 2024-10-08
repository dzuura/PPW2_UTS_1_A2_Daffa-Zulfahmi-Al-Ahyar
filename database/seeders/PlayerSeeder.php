<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder {
    public function run(): void {
        for ($i = 0; $i < 10; $i++) {
            Player::create([
                'nama_pemain' => fake()->name(),
                'no_punggung' => fake()->numberBetween(1, 99),
                'posisi' => 'Gelandang'
            ]);
        }
    }
}
