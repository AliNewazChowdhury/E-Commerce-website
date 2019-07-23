<?php

namespace App\Http\Controllers\Inventory;

use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    //
    public function index(){
 		$categ = ProductCategory::get();
    	return view('inventory.addCategory',['category'=>$categ]);
    }
    public function addCategory(Request $request){
    	 $request->validate([
	        'name' => ['required','between:3,15'],
	        
	    ],[
	    	'name.required'=>'Category name required',
	    	'name.required'=>'name should be between 3 to 15',
	    ]);
    	 $slCategory=ProductCategory::orderBy('sl','desc')->first();

    	 if($slCategory){
    	 	$slCategory=$slCategory->sl+1;
    	 }else{
    	 	$slCategory=1;
    	 }

    	 ProductCategory::create(
    	 	[
    	 		'name'=>$request->name,
    	 		'slug'=>Str::slug($request->name),
    	 		'sl'=>$slCategory,
    	 		'user_id'=>Auth::user()->id,
    	 	]);

    	return back()->with('success','Product Category added succssfuly');
    }
    public function categoryVisibiity(Request $request){
        $checkVisibility=ProductCategory::findOrFail($request->visibility);
        if ($checkVisibility->visibility==1) {
            $checkVisibility->visibility=0;
        }else{
            $checkVisibility->visibility=1;
        }
        $checkVisibility->save();

        return back()->with('success','visibility changed successfully');
    }
    public function categoryDelete(Request $request){
        
        $check=ProductCategory::findOrFail($request->delete);
        $name=$check->name;
        $check->delete();

        return back()->with('success',' '.$name.' Category Deleted Successfully');
    }
    public function categoryUpdate(Request $request){
        
        $check=ProductCategory::findOrFail($request->update);
        $check->name=title_case($request->u_name);
        $check->slug=str_slug($request->u_name);
        $check->user_id=Auth::user()->id;
        $check->save();
        return back()->with('success',' '.$check->name.' Category Updated Successfully');
    }
}
