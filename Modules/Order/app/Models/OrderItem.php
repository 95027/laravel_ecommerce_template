<?php

namespace Modules\Order\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Order\Database\Factories\OrderItemFactory;

class OrderItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    // protected static function newFactory(): OrderItemFactory
    // {
    //     // return OrderItemFactory::new();
    // }

    /* public function Order()
    {
        return $this->belongsTo(Order::class);
    } */
}
