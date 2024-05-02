<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas; 
use App\Models\KelompokKelas; 
use App\Models\Rapor; 

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'tPegawai'; 
    protected $fillable = [
        "nama",
        "alamat",
        "tanggalMasuk",
        "nomorTelp",
        "created_at",
        "updated_at",
        "user_id"
    ];
    protected $guarded = [
        "idPegawai"
    ]; 
    protected $hidden = [
        "created_at",
        "updated_at",
    ]; 
    
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    function Kelas()
    {
        return $this->hasMany(Kelas::class, "idGuru", "idPegawai");
    }
    function WaliKelas()
    {
        return $this->hasOne(KelompokKelas::class, "idGuru", "idPegawai"); 
    }
    function Rapor()
    {
        return $this->hasMany(Rapor::class, "idGuru", "idPegawai"); 
    }
}
