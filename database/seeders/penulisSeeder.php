<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class penulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Penulis')->insert([
            'username' => 'penulis1',
            'password' => Hash::make('kontenpass123'),
            'email' => 'penulis1@portal.com',
            'nama' => 'Joko Widodo',
            'bio' => 'Penulis konten tentang kesehatan dan gaya hidup sehat.',
        ]);

        DB::table('Penulis')->insert([
            'username' => 'penulis2',
            'password' => Hash::make('kontenpass456'),
            'email' => 'penulis2@portal.com',
            'nama' => 'Ayu Lestari',
            'bio' => 'Penulis konten dengan fokus pada tips kesehatan dan diet sehat.',
        ]);

        DB::table('Penulis')->insert([
            'username' => 'penulis3',
            'password' => Hash::make('kontenpass789'),
            'email' => 'penulis3@portal.com',
            'nama' => 'Rina Alamsyah',
            'bio' => 'Penulis konten yang berfokus pada kesehatan mental dan emosional.',
        ]);
    }
}
