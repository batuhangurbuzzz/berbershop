<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['category_id', 'name', 'slug', 'content', 'price', 'image', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
