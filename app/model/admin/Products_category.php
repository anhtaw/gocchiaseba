<?php
namespace App\model\admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
class Products_category extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $fillable = [
        'name_category',
    ];
    use Sortable;
    protected $table = 'products_category';

    // public function products_category()
    // {
    //     return $this->belongsTo('App\model\admin\Products_category','foreign_key');
    // }
    public function products_category()
    {
      return $this->hasMany(Product::class);
    }
}
