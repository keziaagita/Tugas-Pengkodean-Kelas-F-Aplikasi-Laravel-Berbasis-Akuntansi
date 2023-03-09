<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use HasFactory, SoftDeletes;

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
