<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $primaryKey = 'kodeKategori';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = ['kodeKategori', 'namaKategori', 'syaratMasaDinas'];

    public function pengajuans()
    {
        return $this->hasMany(Pengajuan::class, 'Kategori_id');
    }
}

