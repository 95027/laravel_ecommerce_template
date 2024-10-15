<?php

namespace Modules\SocialLogin\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\SocialLogin\Database\Factories\SocialLoginFactory;

class SocialLogin extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    // protected static function newFactory(): SocialLoginFactory
    // {
    //     // return SocialLoginFactory::new();
    // }

    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }
}
