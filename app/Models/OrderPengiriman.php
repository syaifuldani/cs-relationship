<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPengiriman extends Model
{
    use HasFactory;

    protected $table = 'order_pengiriman';
    protected $primaryKey = 'id_order_pengiriman';

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function penjualan()
    {
        return $this->belongsTo(OrderPenjualan::class, 'order_pengiriman_id');
    }
}
