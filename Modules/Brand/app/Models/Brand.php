<?php

namespace Modules\Brand\Models;

use App\Models\Media;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Brand\Database\Factories\BrandFactory;

class Brand extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    // protected static function newFactory(): BrandFactory
    // {
    //     // return BrandFactory::new();
    // }
    public function media()
    {
        return $this->morphOne(Media::class, 'mediable');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
