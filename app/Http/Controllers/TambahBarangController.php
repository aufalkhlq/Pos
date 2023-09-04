<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class TambahBarangController extends Controller
{
    public function index(){

        return view('layouts.form.tambahbarang');
    }

    public function store(Request $request)
    {
        // $newBarang = new Barang();
        // $newBarang->nama_barang = $request->input('nama_barang');
        // // $newBarang->deskripsi = $request->input('deskripsi');
        // $newBarang->stok = $request->input('stok');
        // $newBarang->harga = $request->input('harga');
        // $newBarang->save();

        // return view('layouts.content.barang');

    }
}
