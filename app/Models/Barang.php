<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','name','stok','harga','pemasok_id'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'barang_id', 'id');
    }

    public function temp_purchase()
    {
        return $this->hasMany(TempPurchase::class, 'barang_id', 'id');
    }

    public function pemasok()
    {
        return $this->belongsTo(Pemasok::class, 'pemasok_id', 'id');
    }
}
