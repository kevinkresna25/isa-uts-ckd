<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamBuku extends Model
{
    use HasFactory;

    protected $table = 'tPinjamBuku';

    protected $fillable = [
        "tanggalPinjam",
        "tanggalSeharusnyaKembali",
        "tanggalDikembalikan",
        "tSiswa_idSiswa",
        "tBuku_idBuku", 
        "tPegawai_idPegawai", 
        "statusKembali"
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'tSiswa_idSiswa', 'idSiswa');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'tBuku_idBuku', 'idBuku');
    }
}
