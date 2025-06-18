<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;

Class Product extends Model
{
    protected $table = 'product';
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];
}