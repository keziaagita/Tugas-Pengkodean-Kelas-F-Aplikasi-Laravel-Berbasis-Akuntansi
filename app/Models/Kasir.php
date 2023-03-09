<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','name','alamat','nohp'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'kasir_id', 'id');
    }
    public function temp_purchase()
    {
        return $this->hasMany(TempPurchase::class, 'kasir_id', 'id');
    }
}
