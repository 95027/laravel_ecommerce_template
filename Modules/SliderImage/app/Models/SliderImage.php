<?php

namespace Modules\SliderImage\Models;

use App\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\SliderImage\Database\Factories\SliderImageFactory;

class SliderImage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    // protected static function newFactory(): SliderImageFactory
    // {
    //     // return SliderImageFactory::new();
    // }

    public function media(){
        return $this->morphOne(Media::class, 'mediable');
    }
}
