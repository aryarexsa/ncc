<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'tanggal',
        'paragraf1',
        'paragraf2',
        'paragraf3',
        'paragraf4',
        'paragraf5',
        'penulis',
    ];
}
