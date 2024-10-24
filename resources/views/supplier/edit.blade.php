@extends('layout.app')

@section('title', 'Ubah Supplier')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Ubah Supplier</div>
            <div class="card-body">
                <form action="{{ route('supplier.update', $data->IdSupplier) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="NamaSupplier"
                               value="{{ old('NamaSupplier', isset($data->NamaSupplier) ? $data->NamaSupplier : null) }}">

                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">No Hp</label>
                        <input type="text" class="form-control" id="name" name="NoHp" required
                               value="{{ old('NoHp', isset($data->NoHp) ? $data->NoHp : null) }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="name" name="Alamat" required
                               value="{{ old('Alamat', isset($data->Alamat) ? $data->Alamat : null) }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="name" name="Keterangan" required
                               value="{{ old('Keterangan', isset($data->Keterangan) ? $data->Keterangan : null) }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
