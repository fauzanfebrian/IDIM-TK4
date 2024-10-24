<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'Barang';
    protected $primaryKey = 'IdBarang';
    protected $fillable = ['NamaBarang', 'Keterangan', 'Satuan', "IdPengguna", "IdSupplier"];
    public $timestamps = false;

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'IdPengguna', "IdPengguna");
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'IdSupplier', "IdSupplier");
    }
}
