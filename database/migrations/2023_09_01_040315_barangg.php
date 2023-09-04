<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_barang')->nullable();
            $table->integer('stok')->nullable();
            $table->integer('harga')->nullable() ;
            // $table->text('deskripsi');
            // $table->unsignedBigInteger('supplier_id');
            // $table->foreign('supplier_id')->references('id')->on('supplier');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier');
    }
};
