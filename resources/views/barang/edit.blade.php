@extends('layout.app')

@section('title', 'Ubah Barang')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Ubah Barang</div>
            <div class="card-body">
                <form action="{{ route('barang.update', $data->IdBarang) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="NamaBarang"
                               value="{{ old('NamaBarang', isset($data->NamaBarang) ? $data->NamaBarang : null) }}">

                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="name" name="Keterangan" required
                               value="{{ old('Keterangan', isset($data->Keterangan) ? $data->Keterangan : null) }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Satuan</label>
                        <input type="text" class="form-control" id="name" name="Satuan" required
                               value="{{ old('Satuan', isset($data->Satuan) ? $data->Satuan : null) }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Pengguna</label>
                        <select name="IdPengguna" id="IdPengguna" class="form-control">
                            @foreach( $pengguna as $dataPengguna)
                                <option
                                    value="{{ $dataPengguna->IdPengguna }}">{{ $dataPengguna->NamaPengguna }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Supplier</label>
                        <select name="IdSupplier" id="IdSupplier" class="form-control">
                            @foreach($supplier as $dataSupplier)
                                <option
                                    value="{{ $dataSupplier->IdSupplier }}">{{ $dataSupplier->NamaSupplier }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
