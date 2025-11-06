<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTandaKehormatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'Pengajuan_id', 'noKepres', 'tanggalKepres',
        'namaFile', 'pathFile', 'tanggalUpload'
    ];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class, 'Pengajuan_id');
    }
}


