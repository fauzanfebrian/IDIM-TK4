@extends('layout.app')

@section('title', 'Tambah Pengguna')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Tambah Pengguna</div>
            <div class="card-body">
                <form action="{{ route('pengguna.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="NamaPengguna"
                               value="{{ old('NamaPengguna', isset($data->NamaPengguna) ? $data->NamaPengguna : null) }}">

                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Depan</label>
                        <input type="text" class="form-control" id="name" name="NamaDepan" required
                               value="{{ old('NamaDepan', isset($data->NamaDepan) ? $data->NamaDepan : null) }}">
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
                        <label for="name" class="form-label">Hak Akses</label>
                        <select name="IdAkses" id="IdAkses" class="form-control">
                            @foreach($hakAkses as $akses)
                                <option value="{{ $akses->IdAkses }}">{{ $akses->NamaAkses }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Password</label>
                        <input type="password" class="form-control" id="name" name="Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
