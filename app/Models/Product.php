<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $table="products";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'price',
        'deskripsi',
        'image',
        'stock',
        'category',
    ];

    protected $dates = [ 'deleted_at' ];


    public function categories(){
        return $this->belongsTo(Categories::class, 'category')->withTrashed();
    }
}
