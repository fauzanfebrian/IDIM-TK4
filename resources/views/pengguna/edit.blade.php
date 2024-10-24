@extends('layout.app')

@section('title', 'Ubah Hak Akses')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Ubah Hak Akses</div>
            <div class="card-body">
                <form action="{{ route('pengguna.update', $data->IdAkses) }}" method="POST">
                    @csrf
                    @method('PUT')
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
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
