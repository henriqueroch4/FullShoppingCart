<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','price','image_url','category_id'
    ];
    public function categories()
    {
        return $this->belongsTo(Category::class);    
    }
}
