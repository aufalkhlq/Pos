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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();

            $table->integer('total_harga')->nullable();
            $table->date('tanggal_transaksi')->nullable();
            $table->unsignedBigInteger('metode_id');
            $table->unsignedBigInteger('transaksi_id');
            $table->unsignedBigInteger('kupon_id');
            $table->foreign('metode_id')->references('id')->on('metode');
            $table->foreign('transaksi_id')->references('id')->on('transaksi');
            $table->foreign('kupon_id')->references('id')->on('kupon');

            $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metode');
    }
};
