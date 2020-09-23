<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Email_Contact;

class EmailController extends Controller
{
    public function add_email(Request $request)
    {
    	
    	$email =new Email_Contact;
        
        $email->email=$request->input('email');
                
        $email->save();
        return response()->json(['success'=>'added']);
    }

    public function update_email($id, Request $request)
    {
    	$email=Email_Contact::find($id);

    	$email->email=$request->input('email');
       
        $email->save();
        return response()->json(['success'=>'updated']);
    }

    public function delete_email($id)
    {
        $email=Email_Contact::find($id);
        $email->delete();
        return response()->json(['success'=>'deleted']);
    }
}
