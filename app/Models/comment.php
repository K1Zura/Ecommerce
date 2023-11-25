<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'nomor',
        'deskripsi',
        'product_id',
    ];
    protected $table = 'comments';
    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
