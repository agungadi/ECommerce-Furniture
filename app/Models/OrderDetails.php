<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{

        use HasFactory;
        protected $table="order_details";
        protected $primaryKey = 'id';

        protected $fillable = [
            'id',
            'keranjang_id',
            'order_id',
            'jumlah',
            'unit_price',
            'total_price',
        ];



        public function keranjang(){
            return $this->belongsTo(Keranjang::class, 'keranjang_id');
        }

        public function order(){
            return $this->belongsTo(order::class, 'order_id');
        }
}
