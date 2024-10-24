<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Pengguna|null $pengguna
 * @property-read \App\Models\Supplier|null $supplier
 * @method static \Database\Factories\BarangFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Barang newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Barang newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Barang query()
 */
	class Barang extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $IdAkses
 * @property string $NamaAkses
 * @property string $Keterangan
 * @method static \Database\Factories\HakAksesFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|HakAkses newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HakAkses newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HakAkses query()
 * @method static \Illuminate\Database\Eloquent\Builder|HakAkses whereIdAkses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HakAkses whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HakAkses whereNamaAkses($value)
 */
	class HakAkses extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $IdPelanggan
 * @property string $NamaPelanggan
 * @property string $NoHp
 * @property string $Alamat
 * @property string $Email
 * @method static \Database\Factories\PelangganFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggan whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggan whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggan whereIdPelanggan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggan whereNamaPelanggan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pelanggan whereNoHp($value)
 */
	class Pelanggan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $IdPengguna
 * @property string $NamaPengguna
 * @property string $NamaDepan
 * @property string $Password
 * @property string $NoHp
 * @property string $Alamat
 * @property int $IdAkses
 * @property-read \App\Models\HakAkses $hakAkses
 * @method static \Database\Factories\PenggunaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereIdAkses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereIdPengguna($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereNamaDepan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereNamaPengguna($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna whereNoHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pengguna wherePassword($value)
 */
	class Pengguna extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $IdSupplier
 * @property string $NamaSupplier
 * @property string $NoHp
 * @property string $Alamat
 * @property string $Keterangan
 * @method static \Database\Factories\SupplierFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier query()
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereIdSupplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereNamaSupplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Supplier whereNoHp($value)
 */
	class Supplier extends \Eloquent {}
}

