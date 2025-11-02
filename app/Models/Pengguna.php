<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nis_nisn',
        'kelas',
        'konsentrasi_keahlian',
        'jenis_kelamin',
        'status',
        'role',
    ];
}
