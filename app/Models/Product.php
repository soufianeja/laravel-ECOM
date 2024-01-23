<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'old_price',
        'image',
        'stock',
        'category_id'
    ];

    public function getRouteKeyName(){
        return "slug";
    }

    public function category(){
        return $this->belongsTo(category::class);
    }
}
