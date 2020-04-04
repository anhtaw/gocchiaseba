<?php

namespace App\model\index;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name',
    ];
    protected $table = 'teacher';
}
