<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Pasien')->insert([
            'username' => 'pasien1',
            'password' => Hash::make('pasienpass123'),
            'email' => 'pasien1@portal.com',
            'nama' => 'Budi Santoso',
            'tanggal_lahir' => '1985-06-15',
            'jenis_kelamin' => 'male',
            'no_hp' => '081234567892',
            'alamat' => 'Jl. Raya No. 1, Jakarta',
        ]);

        DB::table('Pasien')->insert([
            'username' => 'pasien2',
            'password' => Hash::make('pasienpass456'),
            'email' => 'pasien2@portal.com',
            'nama' => 'Siti Aminah',
            'tanggal_lahir' => '1990-08-25',
            'jenis_kelamin' => 'female',
            'no_hp' => '081234567893',
            'alamat' => 'Jl. Merdeka No. 3, Jakarta',
        ]);

        DB::table('Pasien')->insert([
            'username' => 'pasien3',
            'password' => Hash::make('pasienpass789'),
            'email' => 'pasien3@portal.com',
            'nama' => 'Rudi Ardiansyah',
            'tanggal_lahir' => '1995-03-17',
            'jenis_kelamin' => 'male',
            'no_hp' => '081234567894',
            'alamat' => 'Jl. Pahlawan No. 5, Jakarta',
        ]);
    }
}
