<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class anousementModel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'more_infoLink'
    ];
}
