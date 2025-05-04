<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('Admin')->insert([
            'username' => 'admin1',
            'password' => Hash::make('password123'),
            'email' => 'admin1@portal.com',
        ]);

        DB::table('Admin')->insert([
            'username' => 'admin2',
            'password' => Hash::make('password456'),
            'email' => 'admin2@portal.com',
        ]);

        DB::table('Admin')->insert([
            'username' => 'admin3',
            'password' => Hash::make('password789'),
            'email' => 'admin3@portal.com',
        ]);
    }
}
