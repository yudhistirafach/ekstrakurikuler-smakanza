<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Extracurricular;
use App\Models\Coach;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AchievementSeeder extends Seeder
{
    public function run(): void
    {
        $extracurriculars = Extracurricular::pluck('id')->toArray();
        $coaches = Coach::pluck('id')->toArray();

        $manualData = [
            [
                'title' => 'Juara 1 Lomba Robotik Nasional 2023',
                'excerpt' => 'Tim Robotik SMKN 1 berhasil meraih Juara 1 tingkat nasional.',
                'description' => 'Kompetisi Robotik Nasional 2023 diikuti oleh ratusan sekolah dari seluruh Indonesia...',
                'level' => 'nasional',
                'year' => 2023,
                'rank' => 'Juara 1',
                'medal' => 'emas',
                'event_date' => '2023-10-15',
                'image_url' => 'achievements/robotik-nasional.jpg',
            ],
            [
                'title' => 'Juara 2 Lomba Web Design Provinsi',
                'excerpt' => 'Prestasi membanggakan dalam ajang desain web tingkat provinsi.',
                'description' => 'Lomba Web Design Provinsi menilai kreativitas, UX, dan implementasi frontend modern...',
                'level' => 'provinsi',
                'year' => 2024,
                'rank' => 'Juara 2',
                'medal' => 'perak',
                'event_date' => '2024-02-20',
                'image_url' => 'achievements/web-design-provinsi.jpg',
            ],
            [
                'title' => 'Juara 3 Lomba Futsal Antar Sekolah',
                'excerpt' => 'Tim futsal meraih juara 3 tingkat kabupaten.',
                'description' => 'Pertandingan futsal antar sekolah berlangsung ketat selama 3 hari...',
                'level' => 'kabupaten',
                'year' => 2022,
                'rank' => 'Juara 3',
                'medal' => 'perunggu',
                'event_date' => '2022-08-12',
                'image_url' => 'achievements/futsal-kabupaten.jpg',
            ],
        ];

        // ✅ Insert data manual
        foreach ($manualData as $item) {
            Achievement::create([
                'extracurricular_id' => fake()->randomElement($extracurriculars),
                'coach_id' => fake()->randomElement($coaches),
                'title' => $item['title'],
                'slug' => Str::slug($item['title']),
                'excerpt' => $item['excerpt'],
                'description' => $item['description'],
                'level' => $item['level'],
                'year' => $item['year'],
                'rank' => $item['rank'],
                'medal' => $item['medal'],
                'event_date' => $item['event_date'],
                'is_published' => true,
                'image_url' => $item['image_url'],
            ]);
        }

        // ✅ Generate data tambahan (UNTUK TEST PAGINATION)
        for ($i = 1; $i <= 30; $i++) {
            $title = 'Prestasi ' . fake()->words(3, true) . ' #' . $i;

            Achievement::create([
                'extracurricular_id' => fake()->randomElement($extracurriculars),
                'coach_id' => fake()->randomElement($coaches),
                'title' => ucfirst($title),
                'slug' => Str::slug($title . '-' . $i),
                'excerpt' => fake()->sentence(10),
                'description' => fake()->paragraph(4),
                'level' => fake()->randomElement(['kabupaten', 'provinsi', 'nasional']),
                'year' => fake()->numberBetween(2020, 2025),
                'rank' => fake()->randomElement(['Juara 1', 'Juara 2', 'Juara 3']),
                'medal' => fake()->randomElement(['emas', 'perak', 'perunggu']),
                'event_date' => fake()->date(),
                'is_published' => true,
                'image_url' => null,
            ]);
        }
    }
}
