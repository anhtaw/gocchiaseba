<?php

namespace App\model\index;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = [
        'name',
        'gia',
        'loaisp',
        'slug',
        'image',
    ];
    protected $table = 'products';
}


