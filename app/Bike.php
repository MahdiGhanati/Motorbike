<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Bike extends Model
{
    //
    use Sortable;
    public $sortable = ['id', 'model', 'company', 'color', 'weight', 'price','created_at', 'updated_at'];
}
