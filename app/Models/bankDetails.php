<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bankDetails extends Model
{
        use HasFactory;

    protected $fillable = [
        'bank_name',
        'branch_name',
        'account_name',
        'account_number',
        'notes',
        
    ];
}
