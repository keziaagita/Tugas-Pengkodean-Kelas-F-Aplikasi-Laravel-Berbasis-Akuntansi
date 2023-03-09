<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempPurchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','barang_id','kasir_id','qty','total'
    ];

    // Relasi Many-to-One ke model kasir
    public function kasir()
    {
        return $this->belongsTo(Kasir::class, 'kasir_id');
    }

    // Relasi Many-to-One ke model Barang
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }
}
