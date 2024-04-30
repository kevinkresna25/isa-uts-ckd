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
}
