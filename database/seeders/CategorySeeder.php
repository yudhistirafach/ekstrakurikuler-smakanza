<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Character Building',
                'slug' => 'character-building',
                'icon' => 'school',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Arts and Culture',
                'slug' => 'arts-and-culture',
                'icon' => 'palette',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sports and Recreation',
                'slug' => 'sports-and-recreation',
                'icon' => 'sports_soccer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Science and Technology',
                'slug' => 'science-and-technology',
                'icon' => 'engineering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
