<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function media()
    {
        return $this->morphOne(Media::class, 'mediable');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parentId');
    }

    public function child()
    {
        return $this->hasMany(Category::class, 'parentId');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
