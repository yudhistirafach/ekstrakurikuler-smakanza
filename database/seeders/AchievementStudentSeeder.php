<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Achievement;

class AchievementStudentSeeder extends Seeder
{
    public function run(): void
    {
        $studentId = 1;

        $achievements = Achievement::all();

        foreach ($achievements as $achievement) {
            DB::table('achievement_students')->updateOrInsert(
                [
                    'achievement_id' => $achievement->id,
                    'student_id' => $studentId,
                ],
                [
                    'created_at' => now()->subDays(rand(1, 365)),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
