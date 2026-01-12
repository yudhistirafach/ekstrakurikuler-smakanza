<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::updateOrCreate(
        ['user_id' => 2],
            [
                'fullname' => 'Budi Santoso',
                'class' => 'XI RPL 2',
                'nis' => '12345678',
                'nisn' => '9988776655',
                'gender' => 'male',
            ]
        );
    }
}
