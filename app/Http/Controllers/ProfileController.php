<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
    	
    	return view('profile.profileView');
    } 
    public function ProfileImage(Request $request){
        
    	$request->validate([
    		'image'=>['required','image','mimes:jpg,jpeg,png','max:1024'],
    	]);

    	$userCheck=User::findOrFail(Auth::user()->id);
    	if ($userCheck->image!=null) {
    		unlink($userCheck->image);
    	}
    	$image=$request->file('image');
    	if ($image) {
            
    		$newExtension=Auth::user()->email.'-'.Str::Uuid().'.'.$image->getClientOriginalExtension();
	    	$prepath = $image->storeAs('public/avatars',$newExtension);
	    	$path='storage/app/'.$prepath;  
    	}else{

	        $path = $userCheck->image;
    	}
    	//$path=Storage::disk('public')->put('avatar',$request->file('image'));
    	//$path = $request->file('image')->store('avatars');

    	$userCheck->image=$path;
    	$userCheck->save();
    	return back()->with('success','Profile image uploaded successfully');
    }  
}
