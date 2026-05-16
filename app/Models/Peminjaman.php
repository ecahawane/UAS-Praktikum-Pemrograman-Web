<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'infokus_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status'
    ];

    // RELASI KE USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // RELASI KE INFOCUS
    public function infokus()
    {
        return $this->belongsTo(Infokus::class);
    }
}