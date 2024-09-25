<?php

namespace Modules\ContactForm\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\ContactForm\Database\Factories\ContactFormFactory;

class ContactForm extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    // protected static function newFactory(): ContactFormFactory
    // {
    //     // return ContactFormFactory::new();
    // }
}
