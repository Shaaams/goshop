<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'unit',
        'price', 'total', 'category_id',
        'options', 'discount'
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

    //this Product belongsto one category


    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function hasUnit (){
        return $this->belongsTo(Unit::class, 'unit', 'id');
    }
}
