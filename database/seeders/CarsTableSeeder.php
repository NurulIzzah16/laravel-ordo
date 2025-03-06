<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'nama' => 'Toyota Corolla',
                'jenis' => 'Sedan',
                'harga' => 3000000000,
                'tanggal_pembuatan' => '2022-05-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Nissan Altima',
                'jenis' => 'Sedan',
                'harga' => 3200000000,
                'tanggal_pembuatan' => '2021-07-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Suzuki Ertiga',
                'jenis' => 'MPV',
                'harga' => 2500000000,
                'tanggal_pembuatan' => '2020-09-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Mitsubishi Xpander',
                'jenis' => 'MPV',
                'harga' => 4000000000,
                'tanggal_pembuatan' => '2023-02-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ford Mustang',
                'jenis' => 'Coupe',
                'harga' => 8000000000,
                'tanggal_pembuatan' => '2022-12-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
