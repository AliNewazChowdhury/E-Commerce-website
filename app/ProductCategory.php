<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    
    protected $fillable = [
        'name', 'slug', 'user_id','visibility','sl',
    ];


    ///// User relation ////

    public function cUser(){
    	return $this->belongsTo('App\User','user_id');
    }
    public function product(){
    	return $this->hasMany('App\Product','categ_id');
    }
}
