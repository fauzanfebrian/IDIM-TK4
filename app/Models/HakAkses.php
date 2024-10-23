<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HakAkses extends Model
{
    use HasFactory;

    protected $table = 'HakAkses';
    protected $primaryKey = 'IdAkses';
    protected $fillable = ['NamaAkses', 'Keterangan'];
    public $timestamps = false;
}
