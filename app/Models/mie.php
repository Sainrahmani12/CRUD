<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mie extends Model
{
    protected $fillable =[
        'id',
        'Merk',
        'Rasa',
        'Harga',
        'Gambar'
    ];
}
