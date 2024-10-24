@extends('layout.app')

@section('title', 'Pengguna')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Pengguna</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
