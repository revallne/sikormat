<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    use HasFactory;
    protected $primaryKey = 'kodeSatker';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = ['kodeSatker', 'namaSatker', 'deskripsi', 'kodeRenmin'];

    public function renmin()
    {
        return $this->belongsTo(Renmin::class, 'kodeRenmin');
    }

    public function personels()
    {
        return $this->hasMany(Personel::class, 'Satker_id');
    }
}

