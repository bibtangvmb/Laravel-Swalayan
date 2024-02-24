<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stuffs extends Model
{
    use HasFactory;

    protected $table = 'stuffs';

    protected $PrimaryKey = 'id';

    protected $keyType = 'string';
    
    protected $fillable = [

        'id',
        'name',
        'price',
        'unit',
        'status',
        'id_category',

    ];
}
