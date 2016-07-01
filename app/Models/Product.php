<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description'];

    /**
     * Get the comments for the blog post.
     */
    public function store_details()
    {
        return $this->hasMany('App\Models\Store');
    }
}
