<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'Pengguna';
    protected $primaryKey = 'IdPengguna';
    protected $fillable = ['NamaPengguna', 'NamaDepan', 'Password', 'NoHp', 'Alamat', 'IdAkses'];
    public $timestamps = false;

    public function hakAkses()
    {
        return $this->belongsTo(HakAkses::class, 'IdAkses', "IdAkses");
    }
}
