<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'keterangan_dokumentasi',
        'tanggal_upload',
        'link_gdrive',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
