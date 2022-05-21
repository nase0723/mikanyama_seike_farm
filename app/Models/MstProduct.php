<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstProduct extends Model
{
    use HasFactory;

    public function sales_months () {
        return $this->hasMany('App\Models\MstSalesMonth', 'product_id');
    }
    public function product_names () {
        return $this->hasMany('App\Models\ProductName', 'product_id');
    }
    public function prices () {
        return $this->hasMany('App\Models\Price', 'product_id');
    }
    public function descriptions () {
        return $this->hasMany('App\Models\Description', 'product_id');
    }

}
