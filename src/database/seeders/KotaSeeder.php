<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kota;
use App\Models\Provinsi;

class KotaSeeder extends Seeder
{
    /**
     * Jalankan seeder.
     */
    public function run(): void
    {
        $jabar = Provinsi::where('nama', 'Jawa Barat')->first();

        if ($jabar) {
            Kota::create(['provinsi_id' => $jabar->id, 'nama' => 'Bandung']);
            Kota::create(['provinsi_id' => $jabar->id, 'nama' => 'Bekasi']);
        } else {
            $this->command->warn("Provinsi 'Jawa Barat' tidak ditemukan. Seeder Kota tidak dijalankan.");
        }
    }
}
