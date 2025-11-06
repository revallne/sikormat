<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renmin extends Model
{
    use HasFactory;
    protected $primaryKey = 'kodeRenmin';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = ['kodeRenmin', 'username', 'password'];

    public function satkers()
    {
        return $this->hasMany(Satker::class, 'kodeRenmin');
    }
}
