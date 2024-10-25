<?php

namespace App\Http\Controllers;

use App\DataTables\PenjualanDataTable;
use App\Http\Requests\StorePenjualanRequest;
use App\Http\Requests\UpdatePenjualanRequest;
use App\Models\Barang;
use App\Models\Pelanggan;
use App\Models\Pengguna;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PenjualanDataTable $penjualanDataTable)
    {
        confirmDelete("Hapus data Penjualan?", "Penjualan akan dihapus secara permanen, lanjutkan?");
        return $penjualanDataTable->render('penjualan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengguna = Pengguna::all();
        $barang = Barang::all();
        $pelanggan = Pelanggan::all();
        return view('penjualan.create', [
            'pengguna' => $pengguna,
            'barang' => $barang,
            'pelanggan' => $pelanggan,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenjualanRequest $request)
    {
        Penjualan::create($request->validated());
        toast('Data Penjualan berhasil ditambahkan', 'success');
        return redirect()->route('penjualan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $penjualan = Penjualan::find($id);
        return view('penjualan.show', [
            'data' => $penjualan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $penjualan = Penjualan::find($id);
        $pengguna = Pengguna::all();
        $barang = Barang::all();
        $pelanggan = Pelanggan::all();
        return view('penjualan.edit', [
            'data' => $penjualan,
            "pengguna" => $pengguna,
            "barang" => $barang,
            "pelanggan" => $pelanggan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenjualanRequest $request, int $id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->update($request->validated());
        toast('Data Penjualan berhasil diubah', 'success');
        return redirect()->route('penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Penjualan::find($id)->delete();
        toast('Data Penjualan berhasil dihapus', 'success');
        return redirect()->route('penjualan.index');
    }
}
