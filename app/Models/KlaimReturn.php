<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KlaimReturn extends Model
{
    use HasFactory;

    protected $table = 'klaim_return';
    protected $primaryKey = 'id_klaim_return';

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
