<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provinsi;

class ProvinsiSeeder extends Seeder
{
    /**
     * Jalankan seeder.
     */
    public function run(): void
    {
        $provinsis = ['Jawa Barat', 'Jawa Tengah', 'DKI Jakarta', 'Bali'];

        foreach ($provinsis as $provinsi) {
            Provinsi::create([
                'nama' => $provinsi
            ]);
        }
    }
}
