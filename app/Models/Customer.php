<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'id_customer';

    protected $fillable = [
        'login_id',
        'nama',
        'jabatan',
        'nama-perusahaan',
        'jenis_perusahaan',
        'no-hp',
        'email',
        'kegiatan_bisnis',
        'bidang_industri',
        'alamat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'login_id');
    }

    public function orderPermintaan()
    {
        return $this->hasMany(OrderPermintaan::class, 'customer_id');
    }

    public function orderPenjualan()
    {
        return $this->hasMany(OrderPenjualan::class, 'customer_id');
    }

    public function orderPengiriman()
    {
        return $this->hasMany(OrderPengiriman::class, 'customer_id');
    }

    public function penawaran()
    {
        return $this->hasMany(OrderPenawaran::class, 'customer_id');
    }

    public function fakturJalan()
    {
        return $this->hasMany(FakturPenjualan::class, 'customer_id');
    }

    public function klaimReturn()
    {
        return $this->hasMany(KlaimReturn::class, 'customer_id');
    }

    public function suratJalan()
    {
        return $this->hasMany(SuratJalan::class, 'customer_id');
    }
}
