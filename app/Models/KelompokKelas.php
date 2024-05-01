<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa; 
use App\Models\Pegawai; 
use App\Models\TahunSekolah; 

class KelompokKelas extends Model
{
    use HasFactory;

    protected $fillable = [ 
        "namaKelas"   
    ]; 

    protected $table = 'tKelompokKelas'; 

    function Siswa()
    {
        return $this->hasMany(Siswa::class, "tKelompokKelas_id", "id");
    }
    function WaliKelas()
    {
        return $this->belongsTo(Pegawai::class, "idGuru", "idPegawai"); 
    }
    function Kelas()
    {
        return $this->hasMany(Kelas::class, "tkelompokkelas_id", "id"); 
    }
    function TahunSekolah()
    {
        return $this->belongsto(TahunSekolah::class, "tahunSekolah_idtahunSekolah", "idTahunSekolah"); 
    }
}
