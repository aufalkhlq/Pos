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
        Schema::create('kupon', function (Blueprint $table) {
            $table->id();

            $table->string('kode_kupon');
            $table->integer('presentase_diskon')->nullable();
            $table->date('tanggal_kedaluarsa');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kupon');
    }
};
