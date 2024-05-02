<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;

    protected $table = 'tKehadiran'; 
    
    protected $fillable = [ 
        "tanggal",
        "statusHadir",
    ]; 

    function Siswa()
    {
        return $this->belongsTo(Siswa::class, 'tSiswa_idSiswa', 'idSiswa'); 
    }
    function Kelas()
    {
        return $this->belongsTo(Kelas::class, "tKelas_id", "id"); 
    }
}
