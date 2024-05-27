<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
    use HasFactory;
    protected $fillabel = ['text', 'coming_soon', 'slug'];
    protected $casts = [
        'coming_soon' => 'datetime',
    ];
    public function image()
    {
        return $this->hasOne(Image::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }
}
