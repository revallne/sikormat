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
        Schema::create('surat_tanda_kehormatans', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('Pengajuan_id');
            $table->string('noKepres');
            $table->date('tanggalKepres');
            $table->string('namaFile');
            $table->string('pathFile');
            $table->date('tanggalUpload');
            $table->timestamps();

            $table->foreign('Pengajuan_id')->references('id')->on('pengajuans')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_tanda_kehormatans');
    }
};
