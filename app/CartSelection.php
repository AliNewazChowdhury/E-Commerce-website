<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartSelection extends Model
{
    protected $fillable=[
    	'invoice','user_id','product_id','quantity',
    ];

}
