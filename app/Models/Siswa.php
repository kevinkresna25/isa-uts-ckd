<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrangTua;
use App\Models\Buku;
use App\Models\PinjamBuku;
use App\Models\Kehadiran;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'tsiswa';
    protected $fillable = [
        "nama",
        "tanggalLahir",
        "jenisKelamin",
        "alamat",
        "nomorTelp",
        "pasFoto",
        "tanggalMasuk",
        "tanggaKeluar",
        "user_id",
        "tKelompokKelas_id"
    ];
    protected $guarded = [
        "idSiswa"
    ];
    protected $hidden = [
        "password",
        "created_at",
        "updated_at"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    function OrangTua()
    {
        return $this->belongsToMany(OrangTua::class, 'tOrangTua_has_tSiswa', 'tSiswa_idSiswa', 'tOrangTua_id');
    }
    function PinjamBuku()
    {
        return $this->belongsToMany(Buku::class, 'tPinjamBuku', 'tSiswa_idSiswa', 'tBuku_idBuku')
            ->using(PinjamBuku::class)->withPivot(
                'tanggalPinjam',
                'tanggalKembali',
                'statusKembali'
            );
    }
    function Kehadiran()
    {
        return $this->hasMany(Kehadiran::class, 'tSiswa_idSiswa');
    }
    function Rapor()
    {
        return $this->hasMany(Rapor::class, 'tSiswa_idSiswa');
    }
    function KelompokKelas()
    {
        return $this->belongsTo(KelompokKelas::class, 'tKelompokKelas_id', 'id');
    }
}
