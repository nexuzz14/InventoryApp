<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kembali extends Model
{
    use HasFactory;

    // Definisikan relasi dengan transaksi
    public function transaksi()
    {
        return $this->belongsTo(transaksi::class, 'id_transaksi', 'id'); 
    }

    // Definisikan relasi dengan bayar
    public function bayar()
    {
        return $this->belongsTo(bayar::class, 'id', 'id_kembali'); 
    }
}
