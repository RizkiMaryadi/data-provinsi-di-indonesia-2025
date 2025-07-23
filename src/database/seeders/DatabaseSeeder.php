<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Jalankan semua seeder.
     */
    public function run(): void
    {
        // Jalankan seeder satu per satu
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ProvinsiSeeder::class,
            KotaSeeder::class,
            PendudukSeeder::class,
        ]);
    }
}
