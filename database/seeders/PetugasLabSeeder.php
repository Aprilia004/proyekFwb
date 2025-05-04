<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class PetugasLabSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('Petugas_laboratorium')->insert([
            'username' => 'petugas1',
            'password' => Hash::make('labpass123'),
            'email' => 'petugas1@portal.com',
            'nama' => 'Andi Sulaiman',
            'no_hp' => '081234567894',
        ]);

        DB::table('Petugas_laboratorium')->insert([
            'username' => 'petugas2',
            'password' => Hash::make('labpass456'),
            'email' => 'petugas2@portal.com',
            'nama' => 'Rina Lestari',
            'no_hp' => '081234567895',
        ]);

        DB::table('Petugas_laboratorium')->insert([
            'username' => 'petugas3',
            'password' => Hash::make('labpass789'),
            'email' => 'petugas3@portal.com',
            'nama' => 'Budi Kurniawan',
            'no_hp' => '081234567896',
        ]);
    }
}
