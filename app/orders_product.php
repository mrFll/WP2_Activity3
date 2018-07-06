<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders_product extends Model
{
    // table name
    protected $table = 'order_products';

    // disable timestamp
    public $timestamps = false;
}
