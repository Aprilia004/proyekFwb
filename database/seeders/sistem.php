<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class sistem extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            ['name' => 'Cardiology', 'description' => 'Heart related treatments', 'image' => 'departments-1.jpg'],
            ['name' => 'Neurology', 'description' => 'Brain and nerves', 'image' => 'departments-2.jpg'],
            ['name' => 'Pediatrics', 'description' => 'Child healthcare', 'image' => 'departments-3.jpg'],
            ['name' => 'Orthopedics', 'description' => 'Bone and muscle treatments', 'image' => 'departments-4.jpg'],
        ]);

        // Doctors
        DB::table('doctors')->insert([
            [
                'name' => 'Dr. John Doe',
                'specialization' => 'Cardiologist',
                'department_id' => 1,
                'image' => 'doctors-1.jpg',
                'social_links' => json_encode(['twitter' => '#', 'facebook' => '#'])
            ],
            [
                'name' => 'Dr. Jane Smith',
                'specialization' => 'Neurologist',
                'department_id' => 2,
                'image' => 'doctors-2.jpg',
                'social_links' => json_encode(['instagram' => '#', 'linkedin' => '#'])
            ],
        ]);

        // Services
        DB::table('services')->insert([
            ['name' => 'Heart Checkup', 'description' => 'Full heart examination.', 'icon' => 'fas fa-heartbeat'],
            ['name' => 'Brain Scan', 'description' => 'Neurological diagnosis.', 'icon' => 'fas fa-brain'],
        ]);

        // Appointments
        DB::table('appointments')->insert([
            [
                'name' => 'Michael Scott',
                'email' => 'michael@dundermifflin.com',
                'phone' => '123456789',
                'appointment_date' => now()->addDays(3),
                'department_id' => 1,
                'doctor_id' => 1,
                'message' => 'I feel chest pain sometimes.'
            ],
        ]);

        // Testimonials
        DB::table('testimonials')->insert([
            [
                'name' => 'Sarah Connor',
                'role' => 'Entrepreneur',
                'message' => 'Excellent service and doctors!',
                'image' => 'testimonials-1.jpg'
            ],
        ]);

        // Gallery
        DB::table('gallery')->insert([
            ['image' => 'gallery-1.jpg'],
            ['image' => 'gallery-2.jpg'],
        ]);

        // Contacts
        DB::table('contacts')->insert([
            [
                'name' => 'John Wick',
                'email' => 'john@continental.com',
                'subject' => 'Emergency Help Needed',
                'message' => 'I need urgent medical attention.'
            ],
        ]);

        // Users (Admin dan Doctor)
        DB::table('users')->insert([
            [
                'name' => 'Admin Rumah Sakit',
                'email' => 'admin@rumahsakit.com',
                'password' => Hash::make('password'), // password = "password"
                'role' => 'admin',
            ],
            [
                'name' => 'Dr. Strange',
                'email' => 'strange@rumahsakit.com',
                'password' => Hash::make('password'), // password = "password"
                'role' => 'doctor',
            ],
        ]);
    }
}
