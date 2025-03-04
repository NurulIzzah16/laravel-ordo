<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('manufactures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_id')->unique();
            $table->string('nama');
            $table->text('alamat');
            $table->timestamps();

            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('manufactures');
    }
};
