<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $primaryKey = 'bukuID';
    protected $fillable = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];
}
