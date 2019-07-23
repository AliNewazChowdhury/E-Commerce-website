<?php

namespace App\Http\Controllers\Page;
use Validator;
use App\Mail\contactEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
   public function contactEmailSent(Request $request){
   		

   		$validator = Validator::make($request->all(), [
            'info_name' => ['required', 'string', 'between:3,100'],
            'info_email' => ['required', 'string', 'email', 'max:255'],
            'info_phone' => ['required', 'string','regex:/(01)[0-9]{9}+/', 'between:11,14'],
            'info_subject' => ['required', 'string', 'in:general,training,payment' ],
            'info_msg' => ['required', 'string', 'between:10,2000' ],
        ],[
            'info_name.between'=>'Name must be between 3 to 100 characters',
            'info_email.unique'=>'Sorry, this email is not valid',
            'info_phone.regex'=>'Phone number will be for ex:019xxxxxxxx',
            'info_subject.in'=>'Subject is invalid',
            'info_msg.between'=>'Address must be between 10 to 2000 characters',
        ]);
   		if($validator->fails()){
   			return back()->withErrors($validator)
   					     ->withInput()
   					     ->with('contactMessage', '<div class="text-center w-100"><h5 class="modal-title text-danger">Email not sent </h5><a href="#contactPage" class="btn btn-sm btn-info">click here</a></div>');
   		}

   		Mail::to('alinewaz33@gmail.com')->send(new contactEmail($request));
   		return back()->with('contactMessage', '<div class="text-center w-100"><h5 class="modal-title text-success">Email sent successfully</h5><a href="#contactPage" class="btn btn-sm btn-info">click here</a></div>');
   }
}
