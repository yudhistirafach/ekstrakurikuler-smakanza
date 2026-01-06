<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin Utama',
            'email' => 'admin@sekolah.com',
            'password' => bcrypt('password123'),
            'nis' => null,
            'nisn' => null,
            'gender' => 'male',
            'role' => 'admin',
        ]);

        // Student
        User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@student.com',
            'password' => bcrypt('password123'),
            'nis' => '2024001',
            'nisn' => '0051234567',
            'gender' => 'male',
            'role' => 'student',
        ]);
    }
}
