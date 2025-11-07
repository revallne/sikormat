<?php

// namespace App\Models;

// // Jangan lupa import trait ini
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;

// class Bagwatpers extends Authenticatable
// {
//     use Notifiable;

//     // Pastikan nama tabel sesuai dengan yang Anda buat di migrasi
//     protected $table = 'bagwatpers';

//     // Field yang bisa diisi (sesuaikan dengan tabel Anda)
//     protected $fillable = [
//         'bagwatpersID','username', 'password' // contoh field
//     ];

//     // Sembunyikan password saat model di-serialize
//     protected $hidden = [
//         'password', 'remember_token',
//     ];
// }


namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagwatpers extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['bagwatpersID','username', 'password'];
}
