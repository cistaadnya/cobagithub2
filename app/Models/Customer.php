<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_customer';
    protected $table = 'customer';

    protected $fillable = [
        'nama', 'alamat','telp', 'jenis_kelamin', 'tgl_lahir', 'email', 'username'
    ];

}
