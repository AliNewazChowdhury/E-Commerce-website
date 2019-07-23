<?php

namespace App\Http\Controllers\Inventory;

use App\ProductCategory;
use App\ProductSubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class SubCategoryController extends Controller
{
    public function index(){
 		$categ = ProductCategory::get();
 		$subcateg = ProductSubCategory::get();
    	return view('inventory.subCategory',['category'=>$categ,'subCategory'=>$subcateg]);
    }
    public function addSubCategory(Request $request){
    	
    	$request->validate([
	        'name' => 'required|between:3,15',
	        'category' => 'required|exists:product_categories,id',
	        
	     ],[
	    	'name.required'=>'Sub-Category name required',
	    	'name.between'=>'name should be between 3 to 15',
	    	'category.exists'=>'Please select the right category',
	    	'category.required'=>'Please select a category',
	     ]);

    	 $slSubCateg=ProductSubCategory::orderBy('sl','desc')->first();

    	 if($slSubCateg){
    	 	$slSubCateg=$slSubCateg->sl+1;
    	 }else{
    	 	$slSubCateg=1;
    	 }

    	 ProductSubCategory::create(
    	 	[
    	 		'name'=>title_case($request->name),
    	 		'slug'=>Str::slug($request->name),
    	 		'sl'=>$slSubCateg,
    	 		'categ_id'=>$request->category,
    	 		'user_id'=>Auth::user()->id,
    	 	]);

    	return back()->with('success','Product Sub-Category '.$request->name.' added succssfuly');
    }

    public function subCategoryVisibility(Request $request){
        $checkVisibility=ProductSubCategory::findOrFail($request->visibility);
        if ($checkVisibility->visibility==1) {
            $checkVisibility->visibility=0;
        }else{
            $checkVisibility->visibility=1;
        }
        $checkVisibility->save();

        return back()->with('success','visibility changed successfully');
    }
    public function subCategoryDelete(Request $request){
        
        $check=ProductSubCategory::findOrFail($request->delete);
        $name=$check->name;
        $check->delete();

        return back()->with('success',' '.$name.' Sub-Category Deleted Successfully');
    }
    public function subCategoryUpdate(Request $request){
        
        $check=ProductSubCategory::findOrFail($request->update);
        $check->name=title_case($request->u_name);
        $check->slug=str_slug($request->u_name);
        $check->user_id=Auth::user()->id;
        $check->save();
        return back()->with('success',' '.$check->name.' Category Updated Successfully');
    }
}
