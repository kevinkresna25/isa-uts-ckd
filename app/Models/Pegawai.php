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

    protected $fillable = [
        "nama",
        "email",
        "email_verified_at",
        "password",
        "username",
        "alamat",
        "tanggalMasuk",
        "peran",
        "nomorTelp",
        "remember_token",
        "created_at",
        "updated_at"
    ];
    protected $guarded = [
        "idPegawai"
    ]; 
    protected $hidden = [
        "password"
    ]; 
    
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
