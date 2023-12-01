<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'name',
        'telp',
        'email',
        'alamat',
        'kota',
        'pembayaran',
        'total',
    ];
}
