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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('Personel_id');
            $table->year('Periode_id');
            $table->integer('Kategori_id');
            $table->integer('SuratTandaKehormatan')->nullable();
            $table->date('tanggalPengajuan');
            $table->string('namaFile_SK_TMT');
            $table->string('pathFile_SK_TMT');
            $table->string('namaFile_SK_pangkat');
            $table->string('pathFile_SK_pangkat');
            $table->string('namaFile_SK_jabatan');
            $table->string('pathFile_SK_jabatan');
            $table->enum('status', [
                'Diajukan',
                'Diterima',
                'Diverifikasi',
                'Diproses',
                'Selesai',
                'Ditolak'
            ])->default('Diproses');
            $table->text('catatan')->nullable();
            $table->timestamps();

            $table->foreign('Personel_id')->references('nrp')->on('personels')->onDelete('cascade');
            $table->foreign('Periode_id')->references('tahun')->on('periodes')->onDelete('cascade');
            $table->foreign('Kategori_id')->references('kodeKategori')->on('kategoris')->onDelete('cascade');
            //$table->foreign('SuratTandaKehormatan_id')->references('id')->on('surat_tanda_kehormatans')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
