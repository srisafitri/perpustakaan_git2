<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['nis', 'nama', 'alamat', 'kelas', 'foto', 'jenis_kelamin'];

    public function scopeJumlahSiswa($query)
    {
        return $query->count();
    }
}
