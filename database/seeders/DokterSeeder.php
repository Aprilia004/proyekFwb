<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DokterSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('Dokter')->insert([
            'username' => 'dokter1',
            'password' => Hash::make('dokterpass123'),
            'email' => 'dokter1@portal.com',
            'nama' => 'Dr. Ahmad',
            'spesialisasi' => 'Penyakit Dalam',
            'no_hp' => '081234567890',
            'bio' => 'Dokter berpengalaman lebih dari 10 tahun.',
        ]);

        DB::table('Dokter')->insert([
            'username' => 'dokter2',
            'password' => Hash::make('dokterpass456'),
            'email' => 'dokter2@portal.com',
            'nama' => 'Dr. Siti',
            'spesialisasi' => 'Kedokteran Anak',
            'no_hp' => '081234567891',
            'bio' => 'Dokter anak yang peduli terhadap kesehatan anak.',
        ]);

        DB::table('Dokter')->insert([
            'username' => 'dokter3',
            'password' => Hash::make('dokterpass789'),
            'email' => 'dokter3@portal.com',
            'nama' => 'Dr. Rudi',
            'spesialisasi' => 'Kedokteran Gigi',
            'no_hp' => '081234567892',
            'bio' => 'Dokter gigi dengan pengalaman lebih dari 5 tahun.',
        ]);
    }
}
