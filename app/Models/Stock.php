<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'product_id',
        'supplier_id',
        'store_id',
        'qty',
        'purchase_price',
        'retail_price'
    ];


    public function product_details(){
        return $this->belongsTo('App\Models\Product');
    }

    public function supplier_details(){
        return $this->belongsTo('App\Models\Supplier');
    }

    public function store_details(){
        return $this->belongsTo('App\Models\Store');
    }
}
