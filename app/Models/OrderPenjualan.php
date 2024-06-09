<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPenjualan extends Model
{
    use HasFactory;

    protected $table = 'order_penjualan';
    protected $primaryKey = 'id_order_penjualan';

    protected $fillable = [
        'status_order'
    ];

    public function penawaran()
    {
        return $this->hasMany(OrderPenawaran::class, 'order_penawaran_id');
    }

    public function fakturPenjualan()
    {
        return $this->hasMany(FakturPenjualan::class, 'order_penjualan_id');
    }

    public function klaimReturn()
    {
        return $this->hasMany(KlaimReturn::class, 'klaim_return_id');
    }

    public function orderpengiriman()
    {
        return $this->hasMany(OrderPengiriman::class, 'order_pengiriman_id');
    }
}
