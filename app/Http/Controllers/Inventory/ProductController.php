<?php

namespace App\Http\Controllers\Inventory;

use App\ProductCategory;
use App\ProductSubCategory;
use App\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){

 		$categ = ProductCategory::get();
 		$subcateg = ProductSubCategory::get();
        $product=Product::orderBy('id','desc')->get();
    	return view('inventory.product',['category'=>$categ,'subCategory'=>$subcateg,'product'=>$product]);
    }
    public function addProduct(Request $request){

        
    	$request->validate([

            'subcategory' => ['required','exists:product_sub_categories,id'],
            'name'=>['required','between:3,15'],
            'buy'=>['required','numeric','between:1,9999'],
            'sell'=>['required','numeric','between:1,9999'],
            'offer'=>['required','numeric','between:1,9999'],
            'stock'=>['required','numeric','between:1,9999'],
            'alert'=>['required','numeric','between:5,50'],
            'image'=>['required','image','mimes:jpg,jpeg,png','max:1024'],
            'description'=>['required','string','between:100,8000'],
	        
	     ],[
            'name.required'=>'Product name required',
            'name.between'=>'Name should have 3-10 characters',
	    	'subcategory.exists'=>'Please select the right category',
	    	'subcategory.required'=>'Please select a subcategory',
	     ]);
        $checkSubCateg=ProductSubCategory::findOrFail($request->subcategory);
        
    	$slProduct=Product::orderBy('sl','desc')->first();
         
    	if($slProduct){
    	 	$slProduct=$slProduct->sl+1;
    	}else{
    	 	$slProduct=1;
    	}

        $image=$request->file('image');
        if ($image) {
            
            $newExtension=Str::Uuid().'.'.$image->getClientOriginalExtension();


            $prepath = $image->storeAs('public/products',$newExtension);
            $path='storage/app/'.$prepath;  
        }else{
            return back()->with('alert','something wrong in your image');
        }

    	 Product::create([
                'code'=>time(),
    	 		'name'=>title_case($request->name),
                'image'=>$path,
    	 		'slug'=>Str::slug($request->name),
                'buy'=>$request->buy,
                'sell'=>$request->sell,
                'offer'=>$request->offer,
    	 		'stock'=>$request->stock,
                'alert'=>$request->alert,
                'description'=>$request->description,
                'sl'=>$slProduct,
                'categ_id'=>$checkSubCateg->categ_id,
                'sub_id'=>$request->subcategory,
    	 		'user_id'=>Auth::user()->id,
    	 	]);

    	return back()->with('success','Product '.$request->name.' added succssfuly');
    }

    public function ProductVisibility(Request $request){
        $checkVisibility=Product::findOrFail($request->visibility);
        if ($checkVisibility->visibility==1) {
            $checkVisibility->visibility=0;
        }else{
            $checkVisibility->visibility=1;
        }
        $checkVisibility->save();

        return back()->with('success','visibility changed successfully');
    }
    public function ProductDelete(Request $request){
        
        $check=Product::findOrFail($request->delete);
        $name=$check->name;
        $check->delete();

        return back()->with('success',' '.$name.' Product Deleted Successfully');
    }
    public function ProductUpdate(Request $request){
        
        $request->validate([
            'u_category' => ['required','exists:product_sub_categories,id'],
            'u_name' => ['required','between:3,15'],
            'u_buy'=>['required','numeric','between:1,9999'],
            'u_sell'=>['required','numeric','between:1,9999'],
            'u_offer'=>['required','numeric','between:0,9999'],
            'u_stock'=>['required','numeric','between:1,9999'],
            'u_alert'=>['required','numeric','between:5,50'], 
            'u_description'=>['required','string','between:100,8000'],
            'u_image'=>['required','image','mimes:jpg,jpeg,png','max:1024'],
            
         ],[

            'u_category.exists'=>'Please select the right subcategory',
            'u_category.required'=>'Please select a subcategory',
            'u_name.required'=>'Sub-Category name required',
            'u_name.between'=>'name should be between 3 to 15',
         ]);
        $check=Product::findOrFail($request->update);

        $image=$request->file('u_image');
        if ($image) {
            
            $newExtension=Str::Uuid().'.'.$image->getClientOriginalExtension();
            if (file_exists($check->image)== true) {
                unlink($check->image);
            }

            $prepath = $image->storeAs('public/products',$newExtension);
            $path='storage/app/'.$prepath;  
        }else{
            $path =$check->image;
        }
         $check->update([
                'name'=>title_case($request->u_name),
                'image'=>$path,
                'slug'=>Str::slug($request->u_name),
                'buy'=>$request->u_buy,
                'sell'=>$request->u_sell,
                'offer'=>$request->u_offer,
                'stock'=>$request->u_stock,
                'alert'=>$request->u_alert,
                'description'=>$request->u_description,
                'categ_id'=>$check->categ_id,
                'sub_id'=>$request->u_category,
				'user_id'=>Auth::user()->id,
            ]);


        return back()->with('success',' '.$check->name.' Product Updated Successfully');
    }
}
