<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'tBuku'; 
    protected $fillable = [
        "namaBuku",
        "pengarangBuku",
        "deskripsiBuku",
        "tahunTerbitBuku",
    ];

    protected $guarded = [
        "idBuku"
    ];
    
}
