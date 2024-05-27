<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price'];

    public function image(){
        return $this->hasOne(Image::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


}
