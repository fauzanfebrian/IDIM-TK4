<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'Penjualan';
    protected $primaryKey = 'IdPenjualan';
    protected $fillable = ['JumlahPenjualan', 'HargaJual', 'IdBarang', 'IdPengguna', 'IdPelanggan'];
    public $timestamps = false;

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'IdPengguna', "IdPengguna");
    }

    function barang()
    {
        return $this->belongsTo(Barang::class, 'IdBarang', "IdBarang");
    }

    function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'IdPelanggan', "IdPelanggan");
    }
}
