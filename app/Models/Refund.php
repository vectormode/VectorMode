<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * The products that belong to the order.
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'refunds_meta')->withPivot('price', 'tax', 'qty', 'row_total_price');
    }
}
