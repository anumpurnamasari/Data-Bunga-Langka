<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BungaLangka extends Model
{
    protected $table = 'bunga_langka';

    protected $fillable = [
        'nama',
        'asal',
        'kelangkaan',
        'warna',
        'deskripsi'
    ];
}