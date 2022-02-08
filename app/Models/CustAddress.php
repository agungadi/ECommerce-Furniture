<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustAddress extends Model
{
    use HasFactory;

    protected $table="cust_address";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'nama_penerima',
        'alamat',
        'kota',
        'provinsi',
        'kode_pos',
        'no_hp',
    ];



    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

