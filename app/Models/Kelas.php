<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $guarded = ['id'];

    public $timestamps = false;

    // Relasi ke tabel Siswa
    // public function siswa()
    // {
    //     return $this->hasMany(Siswa::class);
    // }
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'kelas_id');
    }
    
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}
