<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cust_address extends Model
{
    use HasFactory;
    protected $table="cust_address";

    protected $primaryKey = 'id';

    use HasFactory;
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

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

}
