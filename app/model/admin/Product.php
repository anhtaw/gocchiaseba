<?php
namespace App\model\admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Support\Facades\DB;
use Kyslik\ColumnSortable\Sortable;
class Product extends Model implements Authenticatable
{
    use Sortable;
    use AuthenticableTrait;
    protected $fillable = [
        'name',
        'gia',
        'loaisp',
        'slug',
        'image',
        'status',

    ];
    public $timestamps = true;
    protected $table = 'products';
    protected $sluggable = array(
        'build_from' => 'name', //Xây dựng đường dẫn từ trường 'name'
        'save_to'   => 'slug'   //Lưu tên đường dẫn vào trường 'slug'
    );

    public $sortable = ['id',
    'name',
    'gia',
    'loaisp',
    'image',
    'status',
    'products_category.name_category'
];

public static function join()
{
    return DB::table('products')->join('products_category', 'products.loaisp', '=', 'products_category.id')
    ->select('products.*', 'products_category.name_category')->sortable();

}
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function products_category()
    {
        return $this->hasMany('App\model\admin\Products_category');
    }


}
