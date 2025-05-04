<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class HasillabSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('Hasil_lab')->insert([
            [
                'pasien_id' => 1,
                'petugas_id' => 1,
                'nama_pemeriksaan' => 'Tes Darah Lengkap',
                'hasil' => 'Normal',
                'tanggal_pemeriksaan' => Carbon::now()->subDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pasien_id' => 2,
                'petugas_id' => 1,
                'nama_pemeriksaan' => 'Urinalisis',
                'hasil' => 'Infeksi Saluran Kemih',
                'tanggal_pemeriksaan' => Carbon::now()->subDays(1),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pasien_id' => 3,
                'petugas_id' => 2,
                'nama_pemeriksaan' => 'Tes Gula Darah',
                'hasil' => 'Sedikit Tinggi',
                'tanggal_pemeriksaan' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
