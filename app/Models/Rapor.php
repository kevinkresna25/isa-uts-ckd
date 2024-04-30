<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa; 
use App\Models\Pegawai; 
use App\Models\TahunSekolah; 
use App\Models\Subjek; 

class Rapor extends Model
{
    use HasFactory;

    protected $table = 'trapor';
    protected $fillable = [ 
        "nilaiUTS",
        "nilaiUAS",
        "nilaiTugas",
        "nilaiKeterampilan",
        "nilaiAfektif",
        "pendapatGuru",
    ];

    function Siswa()
    {
        return $this->belongsTo(Siswa::class, "tSiswa_idSiswa", "idSiswa"); 
    }
    function Guru()
    {
        return $this->belongsTo(Pegawai::class, "idGuru", "idPegawai"); 
    }
    function TahunSekolah()
    {
        return $this->belongsTo(TahunSekolah::class, "tahunSekolah_idtahunSekolah", "idtahunSekolah"); 
    }
    function Subjek()
    {
        return $this->belongsto(Subjek::class, "tSubjek_id", "id"); 
    }
}
