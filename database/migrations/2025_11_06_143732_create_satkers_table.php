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
        Schema::create('satkers', function (Blueprint $table) {
            $table->integer('kodeSatker')->primary();
            $table->string('namaSatker', 100)->unique();
            $table->string('deskripsi', 255);
            $table->integer('kodeRenmin');
            $table->foreign('kodeRenmin')->references('kodeRenmin')->on('renmins')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('satkers');
    }
};
