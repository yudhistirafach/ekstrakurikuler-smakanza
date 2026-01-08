<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('extracurriculars')->insert([
            [
                'name' => 'Klub Robotika',
                'slug' => Str::slug('Klub Robotika'),
                'category_id' => 4,
                'coach_id' => 1,
                'description' => 'Wadah siswa yang tertarik pada teknologi, elektronika, dan pemrograman robot.',
                'quota' => 30,
                'day' => 'rabu',
                'start_time' => '15:00:00',
                'end_time' => '17:00:00',
                'location' => 'Lab Komputer 3, Gedung B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'English Club',
                'slug' => Str::slug('English Club'),
                'category_id' => 2,
                'coach_id' => 2,
                'description' => 'Melatih kemampuan speaking, listening, dan public speaking bahasa Inggris.',
                'quota' => 25,
                'day' => 'jumat',
                'start_time' => '14:30:00',
                'end_time' => '16:00:00',
                'location' => 'Ruang Bahasa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Futsal',
                'slug' => Str::slug('Futsal'),
                'category_id' => 3,
                'coach_id' => 3,
                'description' => 'Ekstrakurikuler olahraga untuk meningkatkan kebugaran dan kerja sama tim.',
                'quota' => 20,
                'day' => 'sabtu',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
                'location' => 'Lapangan Sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Basket',
                'slug' => Str::slug('Basket'),
                'category_id' => 3,
                'coach_id' => 3,
                'description' => 'Melatih teknik dasar basket dan sportivitas siswa.',
                'quota' => 18,
                'day' => 'kamis',
                'start_time' => '15:30:00',
                'end_time' => '17:30:00',
                'location' => 'GOR Sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Desain Grafis',
                'slug' => Str::slug('Desain Grafis'),
                'category_id' => 4,
                'coach_id' => 4,
                'description' => 'Mengembangkan kreativitas siswa di bidang desain digital dan visual.',
                'quota' => 22,
                'day' => 'selasa',
                'start_time' => '15:00:00',
                'end_time' => '17:00:00',
                'location' => 'Lab Multimedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Paskibra',
                'slug' => Str::slug('Paskibra'),
                'category_id' => 1,
                'coach_id' => 5,
                'description' => 'Melatih kedisiplinan, kepemimpinan, dan jiwa nasionalisme.',
                'quota' => 24,
                'day' => 'senin',
                'start_time' => '16:00:00',
                'end_time' => '18:00:00',
                'location' => 'Lapangan Upacara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
