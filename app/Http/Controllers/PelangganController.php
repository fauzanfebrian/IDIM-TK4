<?php

namespace App\Http\Controllers;

use App\DataTables\PelangganDataTable;
use App\Http\Requests\StorePelangganRequest;
use App\Http\Requests\UpdatePelangganRequest;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PelangganDataTable $pelangganDataTable)
    {
        confirmDelete("Hapus data Hak Akses?", "Hak Akses akan dihapus secara permanen, lanjutkan?");
        return $pelangganDataTable->render('pelanggan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePelangganRequest $request)
    {
        Pelanggan::create($request->validated());
        toast('Data Hak Akses berhasil ditambahkan', 'success');
        return redirect()->route('pelanggan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.show', [
            'data' => $pelanggan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.edit', [
            'data' => $pelanggan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePelangganRequest $request, int $id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->update($request->validated());
        toast('Data Hak Akses berhasil diubah', 'success');
        return redirect()->route('pelanggan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Pelanggan::find($id)->delete();
        toast('Data Hak Akses berhasil dihapus', 'success');
        return redirect()->route('pelanggan.index');
    }
}
