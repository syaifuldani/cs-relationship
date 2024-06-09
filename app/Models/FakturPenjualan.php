<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FakturPenjualan extends Model
{
    use HasFactory;

    protected $table = 'faktur_penjualan';
    protected $primaryKey = 'id_faktur';

    public function penjualan()
    {
        return $this->belongsTo(OrderPenjualan::class, 'order_penjualan_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
