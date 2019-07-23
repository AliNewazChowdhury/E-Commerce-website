<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code','name', 'slug','image','description','buy','sell','offer','stock','alert','visibility','sl', 'user_id', 'categ_id', 'sub_id',
    ];
    /// Relation ///

    public function categ(){
    	return $this->belongsTo('App\ProductCategory','categ_id');
    }
    public function subCateg(){
    	return $this->belongsTo('App\ProductSubCategory','sub_id');
    }
}
