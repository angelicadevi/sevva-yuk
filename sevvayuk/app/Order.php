<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['jumlah', 'idProduct', 'ship_to', 'rentdate', 'returndate', 'totprice'];
    protected $primaryKey = 'idOrder';
    
}