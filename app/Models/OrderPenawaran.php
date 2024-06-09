<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPenawaran extends Model
{
    use HasFactory;

    protected $table = 'order_penawaran';
    protected $primaryKey = 'id_order_penawaran';

    public function permintaan()
    {
        return $this->hasMany(OrderPermintaan::class, 'order_permintaan_id');
    }

    public function penjualan()
    {
        return $this->hasMany(OrderPenjualan::class, 'penjualan_id');
    }
}
