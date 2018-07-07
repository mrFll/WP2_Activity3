<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    // table name
    protected $table = 'product';

    // table primary key
    protected $primaryKey = 'id';

    //customize the column names
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
