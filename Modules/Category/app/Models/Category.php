<?php

namespace Modules\Category\Models;

use App\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Product\Models\Product;

// use Modules\Category\Database\Factories\CategoryFactory;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    // protected static function newFactory(): CategoryFactory
    // {
    //     // return CategoryFactory::new();
    // }

    public function media()
    {
        return $this->MorphMany(Media::class, 'mediable');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parentId');
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
