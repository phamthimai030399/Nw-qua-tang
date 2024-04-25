<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'tb_carts';

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(CmsProduct::class, 'product_id', 'id');
    }

}
