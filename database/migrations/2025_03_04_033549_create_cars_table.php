<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis');
            $table->decimal('harga', 15, 2);
            $table->date('tanggal_pembuatan');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
