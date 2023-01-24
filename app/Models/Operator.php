<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;
    protected $fillable=['nama', 'jabatan', 'jenis_kelamin'];

    public function scopeJumlahOperator($query)
    {
        return $query->count();
    }
}
