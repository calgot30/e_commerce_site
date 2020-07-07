<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    //telling laravel the name of the table (didn't know it tried to use plural first)
    protected $table = 'order';

}
