<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            'tingkat_kelas' => 'VII',
            'nama' => '1',
            'tahun_masuk' => '2023',
            'tahun_keluar' => '2024',
        ]);
        Kelas::create([
            'tingkat_kelas' => 'VII',
            'nama' => '2',
            'tahun_masuk' => '2023',
            'tahun_keluar' => '2024',
        ]);
        Kelas::create([
            'tingkat_kelas' => 'VII',
            'nama' => '3',
            'tahun_masuk' => '2023',
            'tahun_keluar' => '2024',
        ]);
        Kelas::create([
            'tingkat_kelas' => 'VII',
            'nama' => '4',
            'tahun_masuk' => '2023',
            'tahun_keluar' => '2024',
        ]);
        Kelas::create([
            'tingkat_kelas' => 'VII',
            'nama' => '5',
            'tahun_masuk' => '2023',
            'tahun_keluar' => '2024',
        ]);
        Kelas::create([
            'tingkat_kelas' => 'VIII',
            'nama' => '1',
            'tahun_masuk' => '2023',
            'tahun_keluar' => '2024',
        ]);
        Kelas::create([
            'tingkat_kelas' => 'VIII',
            'nama' => '2',
            'tahun_masuk' => '2023',
            'tahun_keluar' => '2024',
        ]);
        Kelas::create([
            'tingkat_kelas' => 'VIII',
            'nama' => '3',
            'tahun_masuk' => '2023',
            'tahun_keluar' => '2024',
        ]);
        Kelas::create([
            'tingkat_kelas' => 'VIII',
            'nama' => '4',
            'tahun_masuk' => '2023',
            'tahun_keluar' => '2024',
        ]);
        Kelas::create([
            'tingkat_kelas' => 'IX',
            'nama' => '1',
            'tahun_masuk' => '2023',
            'tahun_keluar' => '2024',
        ]);
        Kelas::create([
            'tingkat_kelas' => 'IX',
            'nama' => '2',
            'tahun_masuk' => '2023',
            'tahun_keluar' => '2024',
        ]);
        Kelas::create([
            'tingkat_kelas' => 'IX',
            'nama' => '3',
            'tahun_masuk' => '2023',
            'tahun_keluar' => '2024',
        ]);
        Kelas::create([
            'tingkat_kelas' => 'IX',
            'nama' => '4',
            'tahun_masuk' => '2023',
            'tahun_keluar' => '2024',
        ]);
    }
}
