<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{   // Adjust the table name if it's different
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = ['nama_barang', 'harga', 'stok']; // Define the fillable fields
    public static function validate($request)
    {
        $request->validate([
            "nama_barang" => "required|max:255", 
            "stok" => "required|integer",
            // "deskripsi" => "required", 
            "harga" => "required|numeric|gt:0", 
        ]);
    }
    // public static function total($products, $productsInSession)
    // {
    //     $total = 0;
    //     foreach ($products as $product) {
    //         $total = $total + ($product->getPrice() * $productsInSession[$product->getId()]);
    //     }

    //     return $total;
    // }
}
