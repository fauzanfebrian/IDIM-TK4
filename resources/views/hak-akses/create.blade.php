@extends('layout.app')

@section('title', 'Tambah Hak Akses')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Tambah Hak Akses</div>
            <div class="card-body">
                <form action="{{ route('hak-akses.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="NamaAkses" required
                               value="{{ old('NamaAkses', isset($data->NamaAkses) ? $data->NamaAkses : null) }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="description" name="Keterangan" required
                               value="{{ old('Keterangan', isset($data->Keterangan) ? $data->Keterangan : null) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
