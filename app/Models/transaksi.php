<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Car;
class transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        "nik",
        "nopol",
        "tgl_booking",
        "tgl_ambil",
        "tgl_kembali",
        "supir",
        "total",
        "downpayment",
        "kurang",
        "status",
    ];

    public function User(){
        return  $this->belongsTo(User::class, "nik", "nik");
     }

     public function Car(){
        return $this->belongsTo(Car::class, "nopol", "nopol");
     }
}
