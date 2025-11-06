<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;
    protected $primaryKey = 'tahun';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = ['tahun', 'tanggalAwal', 'tanggalAkhir'];

    public function pengajuans()
    {
        return $this->hasMany(Pengajuan::class, 'Periode_id');
    }
}

