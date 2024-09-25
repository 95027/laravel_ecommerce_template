<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Product\Database\Factories\ProductMetaTagFactory;

class ProductMetaTag extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    // protected static function newFactory(): ProductMetaTagFactory
    // {
    //     // return ProductMetaTagFactory::new();
    // }
}
