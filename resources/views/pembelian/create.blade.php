@extends('layout.app')

@section('title', 'Tambah Pembelian')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Tambah Pembelian</div>
            <div class="card-body">
                <form action="{{ route('pembelian.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Barang</label>
                        <select name="IdBarang" id="IdBarang" class="form-control">
                            @foreach($barang as $dataBarang)
                                <option value="{{ $dataBarang->IdBarang }}">{{ $dataBarang->NamaBarang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Jumlah Pembelian</label>
                        <input type="number" class="form-control" id="name" name="JumlahPembelian"
                               value="{{ old('JumlahPembelian', isset($data->JumlahPembelian) ? $data->JumlahPembelian : null) }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Harga Beli</label>
                        <input type="number" class="form-control" id="name" name="HargaBeli"
                               value="{{ old('HargaBeli', isset($data->HargaBeli) ? $data->HargaBeli : null) }}">
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
