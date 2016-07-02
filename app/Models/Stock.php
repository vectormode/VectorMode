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

    /*
     * Get product details
     */
    public function product_details(){
        return $this->belongsTo('App\Models\Product');
    }
    /*
     * Get supplier details
     */
    public function supplier_details(){
        return $this->belongsTo('App\Models\Supplier');
    }
    /*
     * Get store details
     */
    public function store_details(){
        return $this->belongsTo('App\Models\Store');
    }
}
