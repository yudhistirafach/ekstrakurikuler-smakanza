<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            StudentSeeder::class,
            CategorySeeder::class,
            CoachSeeder::class,
            ExtracurricularSeeder::class,
            AchievementSeeder::class,
            AchievementStudentSeeder::class,
        ]);
    }
}
