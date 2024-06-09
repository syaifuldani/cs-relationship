<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'login_id',
        'email',
        'no-hp',
        'alamat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
