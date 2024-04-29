<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailTransaction;
use App\Models\Customer;
use App\Models\User;


class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $primaryKey = 'nota';
    
    protected $keyType = 'string';

    protected $fillable = [
        'nota',
        'id_user',
        'id_customer',
        'date',
    ];

    function customer() {
        return $this->hasOne(Customer::class, 'id', 'id_customer');
    }

    function detail() {
        return $this->hasMany(DetailTransaction::class, 'nota', 'nota');
    }

    function user() {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
