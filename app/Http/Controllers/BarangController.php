<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TambahBarangController;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('layouts.content.barang', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.form.tambahbarang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newBarang = new Barang();
        $newBarang->nama_barang = $request->input('nama_barang');
        // $newBarang->deskripsi = $request->input('deskripsi');
        $newBarang->stok = $request->input('stok');
        $newBarang->harga = $request->input('harga');
        $newBarang->save();

        return redirect()->route('dashboard.barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function delete($id)
    {
        // Item::where('product_id', $id)->delete();
        // barang::where('barang_id', $id)->delete();
        // barang::destroy($id);
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('dashboard.barang.index');
    }

    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('layouts.form.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang ->nama_barang = $request->input('nama_barang');
        $barang->stok = $request->input('stok');
        $barang->harga = $request->input('harga');
        $barang->update();    
        return redirect()->route('dashboard.barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
