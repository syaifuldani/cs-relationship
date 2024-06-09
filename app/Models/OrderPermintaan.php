<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPermintaan extends Model
{
    use HasFactory;

    protected $table = 'order_permintaan';
    protected $primaryKey = 'id_order_permintaan';

    protected $guarded = [
        'id_order_permintaan'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function penawaran()
    {
        return $this->belongsTo(OrderPenawaran::class, 'penawaran_id');
    }
}
