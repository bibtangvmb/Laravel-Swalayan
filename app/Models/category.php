<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $PrimaryKey = 'id';

    protected $keyType = 'string';
    
    protected $fillable = [

        'id',
        'name',
        'status',
    ];

}
