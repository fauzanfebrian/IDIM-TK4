<?php

namespace App\Http\Controllers;

use App\DataTables\BarangDataTable;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use App\Models\Barang;
use App\Models\Pengguna;
use App\Models\Supplier;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BarangDataTable $barangDataTable)
    {
        confirmDelete("Hapus data Barang?", "Barang akan dihapus secara permanen, lanjutkan?");
        return $barangDataTable->render('barang.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengguna = Pengguna::all();
        $supplier = Supplier::all();
        return view('barang.create', [
            'pengguna' => $pengguna,
            'supplier' => $supplier
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBarangRequest $request)
    {
        Barang::create($request->validated());
        toast('Data Barang berhasil ditambahkan', 'success');
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $barang = Barang::find($id);
        return view('barang.show', [
            'data' => $barang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $barang = Barang::find($id);
        $pengguna = Pengguna::all();
        $supplier = Supplier::all();
        return view('barang.edit', [
            'data' => $barang,
            "pengguna" => $pengguna,
            "supplier" => $supplier,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBarangRequest $request, int $id)
    {
        $barang = Barang::find($id);
        $barang->update($request->validated());
        toast('Data Barang berhasil diubah', 'success');
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Barang::find($id)->delete();
        toast('Data Barang berhasil dihapus', 'success');
        return redirect()->route('barang.index');
    }
}
