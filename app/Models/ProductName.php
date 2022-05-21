<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductName extends Model
{
    use HasFactory;
    public function mst_product() {
        return $this->belongsTo(MstProduct::class);
    }
}
