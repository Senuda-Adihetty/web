<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'image',
        'price',
        'valid',
        'details',
        
    ];

    protected $casts = [
        'details' => 'array',
    ];
}
