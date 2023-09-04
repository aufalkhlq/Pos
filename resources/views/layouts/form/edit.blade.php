@extends('layouts.dashboard.app')

@section('content')

<form method="POST" action="{{ route('dashboard.barang.update', $barang->id ) }}"enctype="multipart/form-data"> 
    @csrf
    @method('PUT')

    <div class="mt-6">
        <label>Nama Barang</label>
        <input type="text" class="input w-full border mt-2" name="nama_barang" value="{{ $barang->nama_barang }}">
    </div>

    <div class="mt-3">
        <label>Stok</label>
        <div class="sm:grid grid-cols-3 gap-2">
            <div class="relative mt-2">
                <div class="absolute top-0 left-0 rounded-l w-12 h-full flex items-center justify-center bg-gray-100 border text-gray-600">pcs</div>
                <div class="pl-3">
                    <input type="text" name="stok" class="input pl-12 w-full border col-span-4" value="{{ $barang->stok }}">
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <label>Harga</label>
        <div class="sm:grid grid-cols-3 gap-2">
            <div class="relative mt-2">
                <div class="absolute top-0 left-0 rounded-l w-12 h-full flex items-center justify-center bg-gray-100 border text-gray-600">Unit</div>
                <div class="pl-3">
                    <input type="text" name="harga" class="input pl-12 w-full border col-span-4" value="{{ $barang->harga }}">
                </div>
            </div>
        </div>
    </div>

    <div class="text-right mt-5">
        <button type="button" class="button w-24 border text-gray-700 mr-1">Cancel</button>
        <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
    </div>
</form>

@endsection
