<?php

namespace App\Models;

use Dotenv\Repository\Adapter\GuardedWriter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa; 

class OrangTua extends Model
{
    use HasFactory;

    protected $table = 'tOrangTua';
    protected $fillable = [
        "id",
        "nama",
        "email",
        "email_verified_at",
        "username",
        "password",
        "nomorTelp",
        "jenisKelamin",
        "hubungan",
        "remember_token",
        "created_at",
        "updated_at",
    ];
    protected $guarded = [ 
        "id"
    ]; 

    protected $hidden = [ 
        "password"
    ]; 

    function Anak()
    {
        return $this->belongsToMany(Siswa::class, 'tOrangTua_has_tSiswa', 'tOrangTua_id', 'tSiswa_idSiswa');
    }
}
