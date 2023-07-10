<?php

namespace App\Exports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Siswa::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'NIS',
            'Nama',
            'Jenis Kelamin',
            'Kelas Id',
        ];
        
    }
}
