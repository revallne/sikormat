<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagwatpers extends Model
{
    use HasFactory;

    protected $fillable = ['bagwapersID','username', 'password'];
}
