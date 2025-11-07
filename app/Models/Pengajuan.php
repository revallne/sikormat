<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'Personel_id', 'Periode_id', 'Kategori_id',
        'SuratTandaKehormatan', 'tanggalPengajuan',
        'namaFile_SK_TMT', 'pathFile_SK_TMT',
        'namaFile_SK_pangkat', 'pathFile_SK_pangkat',
        'namaFile_SK_jabatan', 'pathFile_SK_jabatan',
        'status', 'catatan'
    ];

    public function personel() { return $this->belongsTo(Personel::class, 'Personel_id'); }
    public function periode() { return $this->belongsTo(Periode::class, 'Periode_id'); }
    public function kategori() { return $this->belongsTo(Kategori::class, 'Kategori_id'); }
    public function suratTandaKehormatan() { return $this->hasMany(SuratTandaKehormatan::class, 'SuratTandaKehormatan_id');}
    
    //public function suratTandaKehormatan() { return $this->belongsTo(SuratTandaKehormatan::class, 'SuratTandaKehormatan_id'); }
}

