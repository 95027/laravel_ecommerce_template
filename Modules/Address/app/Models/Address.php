<?php

namespace Modules\Address\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Address\Database\Factories\AddressFactory;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    // protected static function newFactory(): AddressFactory
    // {
    //     // return AddressFactory::new();
    // }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
