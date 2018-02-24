<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
        'address',
        'description'
    ];

    public function stock_details(){
        return $this->hasMany('App\Models\Stock');
    }
}
