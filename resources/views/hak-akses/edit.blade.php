@extends('layout.app')

@section('title', 'Ubah Hak Akses')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Ubah Hak Akses</div>
            <div class="card-body">
                <form action="{{ route('hak-akses.update', $data->IdAkses) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="NamaAkses" required
                               value="{{$data->NamaAkses}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="description" name="Keterangan" required
                               value="{{$data->Keterangan}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
