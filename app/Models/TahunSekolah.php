<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KelompokKelas; 
use App\Models\Rapor; 
use App\Models\Kelas; 

class TahunSekolah extends Model
{
    use HasFactory;
    
    protected $table = "TahunSekolah";
    protected $fillable = [ 
        "tahun",
        "startDate",
        "endDate",
    ];
    protected $guarded = [ 
        "idtahunSekolah"
    ]; 
    
    function KelompokKelas()
    {
        return $this->hasMany(KelompokKelas::class, "tahunSekolah_idtahunSekolah", "idtahunSekolah");
    }
    function Rapor()
    {
        return $this->hasMany(Rapor::class,  "tahunSekolah_idtahunSekolah", "idtahunSekolah");
    }
    function Kelas()
    {
        return $this->hasmany(Kelas::class,  "tahunSekolah_idtahunSekolah", "idtahunSekolah");
    }
}
