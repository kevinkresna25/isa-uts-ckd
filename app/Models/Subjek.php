<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rapor; 
use App\Models\Kelas; 

class Subjek extends Model
{
    use HasFactory;

    protected $fillable = [ 
        "namaSubjek",
    ]; 
    protected $guarded = [ 
        "id"
    ]; 

    function Nilai()
    {
        return $this->hasMany(Rapor::class, "tSubjek_id", "id"); 
    }
    function Kelas()
    {
        return $this->hasMany(Kelas::class, "tSubjek_id", "id"); 
    }
}
