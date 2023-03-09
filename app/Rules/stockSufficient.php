<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Barang;

class StockSufficient implements Rule
{
    protected $barang_id;
    protected $qty;

    public function __construct($barang_id, $qty)
    {
        $this->barang_id = $barang_id;
        $this->qty = $qty;
    }

    public function passes($attribute, $value)
    {
        $barang = Barang::find($this->barang_id);
        $stok = $barang->stok + $this->qty;
        return $stok <= $barang->stok;
    }

    public function message()
    {
        return 'Stok barang tidak mencukupi';
    }
}
