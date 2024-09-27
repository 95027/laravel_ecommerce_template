<?php

namespace Modules\Product\Models;

use App\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Brand\Models\Brand;
use Modules\Category\Models\Category;

// use Modules\Product\Database\Factories\ProductFactory;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    // protected static function newFactory(): ProductFactory
    // {
    //     // return ProductFactory::new();
    // }

    public function media()
    {
        return $this->hasMany(Media::class, 'mediable_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brandId');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }

    public function tag(){
        return $this->hasOne(ProductMetaTag::class,'product_id');
    }
}
