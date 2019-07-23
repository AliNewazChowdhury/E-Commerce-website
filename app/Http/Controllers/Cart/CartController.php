<?php

namespace App\Http\Controllers\Cart;
use App\CartSelection;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function productCartSelection(Request $request){
    	$checkProduct=Product::where('code',$request->code)->first();
    	if ($checkProduct) {
	    	$checkCartSelection=CartSelection::where('user_id',Auth::user()->id)->whereDate('created_at',now())->get();
	    	if($checkCartSelection && count($checkCartSelection)>0){
	    		$invoiceID = $checkCartSelection->last()->invoice;
	    	}else{
	    		$invoiceID = str::uuid();
	    	}
	    	CartSelection::create([
	    		'invoice'=>$invoiceID,
	    		'user_id'=>Auth::user()->id,
	    		'product_id'=>$checkProduct->id,
	    		'quantity'=>$request->quantity,
	    	]);
	    	return back()->with('success',$checkProduct->name.' has been added to cart Successfully');
    	}else{
    		return back();
    	}
    }

	public function productCartOrder(){
		$check = CartSelection::where('user_id',Auth::user()->id)->get();
		$temp_array = array(); 
	    $i = 0; 
	    $key_array = array(); 
	    
	    foreach($check as $val) { 
	        if (!in_array($val['product_id'], $key_array)) { 
	            $key_array[$i] = $val['product_id']; 
	            $temp_array[$i] = $val;
	            $temp_array[$i]['quantity']=0;
	        } 
	        $i++; 
	    }

	    $checkPro = CartSelection::where('user_id',Auth::user()->id)->get();
	    
	    foreach($temp_array as $product){ 
	    	
	        	foreach ($checkPro as $productNo) {
	        		
	        		if ($product['product_id']==$productNo['product_id']) {
	        			
	        			$product['quantity'] = $product['quantity'] + $productNo['quantity'];
					
					}
	        	}
	    } 
		
			
	    return view('FrontEnd.cartProduct',['check'=>$check,'temp_array'=>$temp_array]);
		}
		
	
}