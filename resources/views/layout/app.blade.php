<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name'))</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Dashboard
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('hak-akses') ? 'active' : '' }}" href="{{ url('/hak-akses') }}">
                            Hak Akses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pengguna') ? 'active' : '' }}" href="{{ url('/pengguna') }}">
                            Pengguna
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('supplier') ? 'active' : '' }}" href="{{ url('/supplier') }}">
                            Supplier
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pelanggan') ? 'active' : '' }}" href="{{ url('/pelanggan') }}">
                            Pelanggan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('barang') ? 'active' : '' }}" href="{{ url('/barang') }}">
                            Barang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('penjualan') ? 'active' : '' }}" href="{{ url('/penjualan') }}">
                            Penjualan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pembelian') ? 'active' : '' }}" href="{{ url('/pembelian') }}">
                            Pembelian
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>

@include('sweetalert::alert')
@stack('scripts')
</body>
</html>
