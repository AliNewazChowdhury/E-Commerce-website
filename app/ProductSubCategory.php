<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSubCategory extends Model
{
       
    protected $fillable = [
        'name', 'slug', 'user_id','visibility','sl','categ_id',
    ];

    public function product(){
    	return $this->hasMany('App\Product','sub_id');
    }
}
