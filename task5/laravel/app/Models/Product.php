<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name_en','name_ar','image','quantity','price','details_en','details_ar','code','status',
    'subcategory_id','brand_id'];

//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
protected function image(): Attribute
{
    return Attribute::make(
        get: function($value){
            return asset('images/'.$value);
        },
    );
}
}
