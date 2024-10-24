@extends('layout.app')

@section('title', 'Hak Akses')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Hak Akses</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
