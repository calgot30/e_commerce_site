<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //telling laravel the name of the table (didn't know it tried to use plural first)
    protected $table = 'cart';

}
