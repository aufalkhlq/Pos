<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahBarangController extends Controller
{
    public function index(){

        return view('layouts.form.tambahbarang');
    }
}
