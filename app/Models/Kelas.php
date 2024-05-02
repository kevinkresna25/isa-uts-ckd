<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'tKelas'; 
    protected $fillable = [
        "lokasiKelas",
        "tanggal",
        "jamMulai",
        "jamSelesai"
    ]; 
    protected $guarded = [ 
        "id"
    ]; 
    function Guru()
    {
        return $this->belongsTo(Pegawai::class, "idGuru", "idPegawai"); 
    }
    function KelompokKelas()
    {
        return $this->belongsTo(KelompokKelas::class, "tkelompokkelas_id", "id"); 
    }
    function TahunSekolah()
    {
        return $this->belongsTo(TahunSekolah::class, "tahunSekolah_idtahunSekolah", "idtahunSekolah"); 
    }
    function Kehadiran(){
        return $this->hasMany(Kehadiran::class);
    }
    function Subjek()
    {
        return $this->belongsto(Subjek::class, "tSubjek_id", "id"); 
    }
}
