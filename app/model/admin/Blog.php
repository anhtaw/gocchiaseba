<?php

    namespace App\model\admin;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class Blog extends Model
{
    protected $fillable = [
        'name', 'detail',
    ];
    use Sortable;
    protected $table = 'blog';
    // protected $sortable = [
    //     'id',
    //     'name',
    //     'detail',


    // ];
}
