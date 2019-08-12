<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','price','image_url'
    ];
    public function categories()
    {
        return $this->belongsTo(Category::class);    
    }
}
