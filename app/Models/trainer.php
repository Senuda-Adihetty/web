<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class trainer extends Model
{
 use HasFactory;

    protected $fillable = [
       'Trainer_ID',
        'fName',
        'lName',
        'phone_No',
        'gender',
        'birthday',
        'address',
        'basic_Sal',
        'photo',
        'qulification',
        'email',
        'fb',
        'insta',
    ];
}
