<?php

namespace App\Http\Controllers\Page;
use App\Product;
use App\ProductCategory;
use App\ProductSubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index(){
    	$categ=ProductCategory::has('product')->where('visibility',1)->get();
    	$subCategory=ProductSubCategory::where('visibility',1)->get();
    	$product=Product::where('visibility',1)->get();
    	return view('FrontEnd.index',['categ'=>$categ,'subCateg'=>$subCategory,'product'=>$product]);
    }
    public function productDetailsPage($code){
        $checkProduct=Product::where('code',$code)->first();
        if ($checkProduct) {
         return view('FrontEnd.productDetails',['product'=>$checkProduct]);
        }
    	return redirect('/');
    }
    public function productSubcategoryView($categ,$sub){
    	///Category check//////
    	$checkCateg=ProductCategory::where('slug',$categ)->first();
    	if($checkCateg){
    		$checkSub=ProductSubCategory::where(['categ_id'=>$checkCateg->id,'slug'=>$sub])->first();
    		if($checkSub){
    			$subProduct=Product::where(['categ_id'=>$checkCateg->id,'sub_id'=>$checkSub
    				->id])->get();
    			$breadCrumb=['categ'=>$checkCateg->name,'sub'=>$checkSub->name];

		    	return view('FrontEnd.productSubView',['subProduct'=>$subProduct,'breadCrumb'=>$breadCrumb]);
    		}
    	}
    	return redirect('/');
    }
}
