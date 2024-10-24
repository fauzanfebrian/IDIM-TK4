<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'Pelanggan';
    protected $primaryKey = 'IdPelanggan';
    protected $fillable = ['NamaPelanggan', 'NoHp', 'Alamat', 'Email'];
    public $timestamps = false;
}
