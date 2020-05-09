<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable=['nameStore', 'address', 'phonenumber', 'email'];
    protected $primaryKey = 'idStore';
}
