<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coaches')->insert([
            [
                'name' => 'Budi Santoso, S.T.',
                'email' => 'budi.santoso@smkn1.sch.id',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Aminah, S.Pd.',
                'email' => 'siti.aminah@smkn1.sch.id',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Agus Pratama',
                'email' => 'agus.pratama@smkn1.sch.id',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rina Kusuma, S.Pd.',
                'email' => 'rina.kusuma@smkn1.sch.id',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dedi Firmansyah',
                'email' => 'dedi.firmansyah@smkn1.sch.id',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
