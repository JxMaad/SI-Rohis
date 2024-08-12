<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kelas',
        'motto_hidup',
        'alasan_masuk',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
