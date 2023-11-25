<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'deskripsi',
        'kategori',
        'image',
        'user_id',
        'harga',
        'width',
        'height',
        'depth',
        'weight',
        'contain',
    ];

    protected $table = 'products';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function wishtlist(){
        return $this->belongsToMany(User::class, 'wishlists')->withTimestamp();
    }
    public function comment()
    {
        return $this->hasMany(comment::class, 'product_id', 'id');
    }
}
