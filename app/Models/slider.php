<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_headingBlack',
        'first_headingBlue',
        'second_headingBlack',
        'second_headingBlue',
        'mini_para',
        'image_link',
        'more_infoLink',
        'more_infoLink2'

    ];
}
