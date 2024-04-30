<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamBuku extends Model
{
    use HasFactory;

    protected $fillable = [ 
        "tanggalPinjam",
        "tanggalKembali",
        "statusKembali"
    ]; 
}
