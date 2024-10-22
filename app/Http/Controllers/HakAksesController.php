<?php

namespace App\Http\Controllers;

use App\HakAkses;
use App\Http\Requests\StoreHakAksesRequest;
use App\Http\Requests\UpdateHakAksesRequest;

class HakAksesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = HakAkses::all();
        return view('hak-akses.index', compact('data'));
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
        return redirect()->route('hak-akses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(HakAkses $hakAkses)
    {
       return view('hak-akses.show', [
        'data' => $hakAkses
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HakAkses $hakAkses)
    {
        return view('hak-akses.edit', [
            'data' => $hakAkses
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHakAksesRequest $request, HakAkses $hakAkses)
    {
        $hakAkses->update($request->validated());
        return redirect()->route('hak-akses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HakAkses $hakAkses)
    {
        $hakAkses->delete();
        return redirect()->route('hak-akses.index');
    }
}
