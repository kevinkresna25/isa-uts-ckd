<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $table = 'tbuku';

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
