<?php

namespace App\Http\Controllers;


use App\DataTables\SupplierDataTable;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SupplierDataTable $supplierDataTable)
    {
        confirmDelete("Hapus data Hak Akses?", "Hak Akses akan dihapus secara permanen, lanjutkan?");
        return $supplierDataTable->render('supplier.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupplierRequest $request)
    {
        Supplier::create($request->validated());
        toast('Data Hak Akses berhasil ditambahkan', 'success');
        return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $supplier = Supplier::find($id);
        return view('supplier.show', [
            'data' => $supplier
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $supplier = Supplier::find($id);
        return view('supplier.edit', [
            'data' => $supplier,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupplierRequest $request, int $id)
    {
        $supplier = Supplier::find($id);
        $supplier->update($request->validated());
        toast('Data Hak Akses berhasil diubah', 'success');
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Supplier::find($id)->delete();
        toast('Data Hak Akses berhasil dihapus', 'success');
        return redirect()->route('supplier.index');
    }
}
