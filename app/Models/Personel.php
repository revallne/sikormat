<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
    use HasFactory;
    protected $primaryKey = 'nrp';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nrp', 'password', 'nama', 'tmtPertama', 'pangkat', 'jabatan', 'tempatLahir', 'Satker_id'
    ];

    public function satker()
    {
        return $this->belongsTo(Satker::class, 'Satker_id');
    }

    public function pengajuans()
    {
        return $this->hasMany(Pengajuan::class, 'Personel_id');
    }
}

