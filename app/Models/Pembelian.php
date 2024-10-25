<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'Pembelian';
    protected $primaryKey = 'IdPembelian';
    protected $fillable = ['JumlahPembelian', 'HargaBeli', 'IdBarang', 'IdPengguna'];
    public $timestamps = false;

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'IdPengguna', "IdPengguna");
    }

    function barang()
    {
        return $this->belongsTo(Barang::class, 'IdBarang', "IdBarang");
    }
}
