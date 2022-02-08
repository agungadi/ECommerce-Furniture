<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table="order";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'address_id',
        'total_cost',
        'order_date',
        'order_status',
        'estinmasi_date',
        'progress',
        'bukti',
    ];

    public function keranjang(){
        return $this->belongsTo(products::class, 'cart_id')->withTrashed();
    }

    public function cust_address(){
        return $this->belongsTo(CustAddress::class, 'address_id');
    }
}

