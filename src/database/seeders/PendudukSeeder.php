<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penduduk;
use App\Models\Kota;

class PendudukSeeder extends Seeder
{
    /**
     * Jalankan seeder.
     */
    public function run(): void
    {
        $bandung = Kota::where('nama', 'Bandung')->first();

        if ($bandung) {
            Penduduk::create(['kota_id' => $bandung->id, 'nama' => 'Ahmad', 'usia' => 32]);
            Penduduk::create(['kota_id' => $bandung->id, 'nama' => 'Siti', 'usia' => 28]);
        } else {
            $this->command->warn("Kota 'Bandung' tidak ditemukan. Seeder Penduduk tidak dijalankan.");
        }
    }
}
