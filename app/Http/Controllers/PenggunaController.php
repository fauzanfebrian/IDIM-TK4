<?php

namespace App\Http\Controllers;

use App\DataTables\PenggunaDataTable;
use App\Http\Requests\StorePenggunaRequest;
use App\Http\Requests\UpdatePenggunaRequest;
use App\Models\HakAkses;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PenggunaDataTable $penggunaDataTable)
    {
        confirmDelete("Hapus data Hak Akses?", "Hak Akses akan dihapus secara permanen, lanjutkan?");
        return $penggunaDataTable->render('pengguna.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hakAkses = HakAkses::all();
        return view('pengguna.create', [
            'hakAkses' => $hakAkses
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenggunaRequest $request)
    {
        Pengguna::create($request->validated());
        toast('Data Hak Akses berhasil ditambahkan', 'success');
        return redirect()->route('pengguna.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $pengguna = Pengguna::find($id);
        return view('pengguna.show', [
            'data' => $pengguna
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $pengguna = Pengguna::find($id);
        $hakAkses = HakAkses::all();
        return view('pengguna.edit', [
            'data' => $pengguna,
            "hakAkses" => $hakAkses
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenggunaRequest $request, int $id)
    {
        $pengguna = Pengguna::find($id);
        $pengguna->update($request->validated());
        toast('Data Hak Akses berhasil diubah', 'success');
        return redirect()->route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Pengguna::find($id)->delete();
        toast('Data Hak Akses berhasil dihapus', 'success');
        return redirect()->route('pengguna.index');
    }
}
