<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    // table name
    protected $table = 'orders';

    // table primary key
    protected $primaryKey = 'id';

    //customize the column names
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
