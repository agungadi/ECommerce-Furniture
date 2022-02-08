<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $table="keranjang";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'product_id',
        'user_id',
        'jumlah',
        'warna',
        'catatan',
        'status',
    ];

    public function products(){
        return $this->belongsTo(Product::class, 'product_id')->withTrashed();
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

