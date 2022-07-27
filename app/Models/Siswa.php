<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public $fillable = ['nama', 'nis', 'kelas', 'jenis_kelamin', 'tgl_pinjam', 'jumlah'];
    public $timestamps = true;
}
