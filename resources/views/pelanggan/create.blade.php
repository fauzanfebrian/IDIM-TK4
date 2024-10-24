@extends('layout.app')

@section('title', 'Tambah Hak Akses')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Tambah Hak Akses</div>
            <div class="card-body">
                <form action="{{ route('pelanggan.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="NamaPelanggan"
                               value="{{ old('NamaPelanggan', isset($data->NamaPelanggan) ? $data->NamaPelanggan : null) }}">

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
                        <label for="name" class="form-label">Email</label>
                        <input type="text" class="form-control" id="name" name="Email" required
                               value="{{ old('Email', isset($data->Email) ? $data->Email : null) }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
