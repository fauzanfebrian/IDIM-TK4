@extends('layout.app')

@section('title', 'Ubah Penjualan')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Ubah Penjualan</div>
            <div class="card-body">
                <form action="{{ route('penjualan.update', $data->IdPenjualan) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Barang</label>
                        <select name="IdBarang" id="IdBarang" class="form-control">
                            @foreach($barang as $dataBarang)
                                <option value="{{ $dataBarang->IdBarang }}">{{ $dataBarang->NamaBarang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Jumlah Penjualan</label>
                        <input type="number" class="form-control" id="name" name="JumlahPenjualan"
                               value="{{ old('JumlahPenjualan', isset($data->JumlahPenjualan) ? $data->JumlahPenjualan : null) }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Harga Jual (Satuan)</label>
                        <input type="number" class="form-control" id="name" name="HargaJual"
                               value="{{ old('HargaJual', isset($data->HargaJual) ? $data->HargaJual : null) }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Pelanggan</label>
                        <select name="IdPelanggan" id="IdPelanggan" class="form-control">
                            @foreach($pelanggan as $dataPelanggan)
                                <option
                                    value="{{ $dataPelanggan->IdPelanggan }}">{{ $dataPelanggan->NamaPelanggan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Pengguna</label>
                        <select name="IdPengguna" id="IdPengguna" class="form-control">
                            @foreach($pengguna as $dataPengguna)
                                <option
                                    value="{{ $dataPengguna->IdPengguna }}">{{ $dataPengguna->NamaPengguna }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
