<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'Supplier';
    protected $primaryKey = 'IdSupplier';
    protected $fillable = ['NamaSupplier', 'NoHp', 'Alamat', 'Keterangan'];
    public $timestamps = false;
}
