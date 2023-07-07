<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MapelSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mapels = [
            'Matematika',
            'Bahasa Indonesia',
            'IPA',
            'IPS',
            'PKN',
            'PJOK',
            'Prakarya',
            'Pendidikan Agama Islam',
            'Informatika',
            'Seni Budaya',
            'Bimbingan TIK',
            'Bimbingan Konseling',
            'Bahasa Derah',
        ];

        foreach ($mapels as $mapel) {
            Mapel::create([
                'nama' => $mapel,
            ]);
        }
    }
}
