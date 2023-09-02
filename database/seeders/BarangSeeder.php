<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        DB::table('barang')-> insert([
            'nama_barang' => 'Kulkas',
            'harga' => '100000',
            'stok' => '21'
        ]);
    }
}
