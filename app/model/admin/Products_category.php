<?php
namespace App\model\admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
class Products_category extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $fillable = [
        'name_category',
    ];
    protected $table = 'products_category';
    public function products_category()
    {
        return $this->belongsTo('App\model\admin\Products_category','foreign_key');
    }
}
