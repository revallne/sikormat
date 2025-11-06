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
        Schema::create('personels', function (Blueprint $table) {
            $table->string('nrp')->primary();
            $table->string('password');
            $table->string('nama');
            $table->date('tmtPertama');
            $table->string('pangkat');
            $table->string('jabatan');
            $table->string('tempatLahir');
            $table->integer('Satker_id');
            $table->foreign('Satker_id')->references('kodeSatker')->on('satkers')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personels');
    }
};
