<?php

namespace App\Http\Controllers;

use App\DataTables\PembelianDataTable;
use App\Http\Requests\StorePembelianRequest;
use App\Http\Requests\UpdatePembelianRequest;
use App\Models\Barang;
use App\Models\Pembelian;
use App\Models\Pengguna;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PembelianDataTable $pembelianDataTable)
    {
        confirmDelete("Hapus data Pembelian?", "Pembelian akan dihapus secara permanen, lanjutkan?");
        return $pembelianDataTable->render('pembelian.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengguna = Pengguna::all();
        $barang = Barang::all();
        return view('pembelian.create', [
            'pengguna' => $pengguna,
            'barang' => $barang,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePembelianRequest $request)
    {
        Pembelian::create($request->validated());
        toast('Data Pembelian berhasil ditambahkan', 'success');
        return redirect()->route('pembelian.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $pembelian = Pembelian::find($id);
        return view('pembelian.show', [
            'data' => $pembelian
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $pembelian = Pembelian::find($id);
        $pengguna = Pengguna::all();
        $barang = Barang::all();
        return view('pembelian.edit', [
            'data' => $pembelian,
            "pengguna" => $pengguna,
            "barang" => $barang,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePembelianRequest $request, int $id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian->update($request->validated());
        toast('Data Pembelian berhasil diubah', 'success');
        return redirect()->route('pembelian.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Pembelian::find($id)->delete();
        toast('Data Pembelian berhasil dihapus', 'success');
        return redirect()->route('pembelian.index');
    }
}
