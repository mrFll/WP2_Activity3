<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    // table name
    protected $table = 'products';

    // table primary key
    protected $primaryKey = 'id';

    // disable timestamp
    // public $timestamps = false;

    //customize the column names
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


}
