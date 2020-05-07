<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['nameProduct', 'price', 'stok', 'rentdate', 'returndate'];
    protected $primaryKey = 'idProduct';

}

