<?php

namespace Modules\Transaction\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Transaction\Database\Factories\TransactionFactory;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    // protected static function newFactory(): TransactionFactory
    // {
    //     // return TransactionFactory::new();
    // }
}
