<?php

namespace App\Http\Controllers;

use App\DataTables\HakAksesDataTable;
use App\Http\Requests\StoreHakAksesRequest;
use App\Http\Requests\UpdateHakAksesRequest;
use App\Models\HakAkses;

class HakAksesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(HakAksesDataTable $hakAksesDataTable)
    {
        confirmDelete("Hapus data Hak Akses?", "Hak Akses akan dihapus secara permanen, lanjutkan?");
        return $hakAksesDataTable->render('hak-akses.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hak-akses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHakAksesRequest $request)
    {
        HakAkses::create($request->validated());
        toast('Data Hak Akses berhasil ditambahkan', 'success');
        return redirect()->route('hak-akses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $hakAkses = HakAkses::find($id);
        return view('hak-akses.show', [
            'data' => $hakAkses
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $hakAkses = HakAkses::find($id);
        return view('hak-akses.edit', [
            'data' => $hakAkses
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHakAksesRequest $request, int $id)
    {
        $hakAkses = HakAkses::find($id);
        $hakAkses->update($request->validated());
        toast('Data Hak Akses berhasil diubah', 'success');
        return redirect()->route('hak-akses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        HakAkses::find($id)->delete();
        toast('Data Hak Akses berhasil dihapus', 'success');
        return redirect()->route('hak-akses.index');
    }
}
