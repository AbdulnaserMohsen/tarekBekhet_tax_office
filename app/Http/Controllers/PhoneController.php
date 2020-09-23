<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Phone_Contact;

class PhoneController extends Controller
{
    
    public function add_mobile(Request $request)
    {
    	
    	$phone =new Phone_Contact;
        
        $phone->phone=$request->input('mobile');
        $phone->type=1;
                
        $phone->save();
        return response()->json(['success'=>'added']);
    }

    public function add_whats(Request $request)
    {
    	
    	$phone =new Phone_Contact;
        
        $phone->phone=$request->input('mobile');
        $phone->type=3;
                
        $phone->save();
        return response()->json(['success'=>'added']);
    }

    public function add_ground(Request $request)
    {
    	
    	$phone =new Phone_Contact;
        
        $phone->phone=$request->input('phone');
        $phone->type=2;
                
        $phone->save();
        return response()->json(['success'=>'added']);
    }

    public function update_phone($id, Request $request)
    {
    	$phone=Phone_Contact::find($id);

    	if ($request->has('mobile')) {$phone->phone=$request->input('mobile');}

    	else if($request->input('phone')){$phone->phone=$request->input('phone');}
       
        $phone->save();
        return response()->json(['success'=>'updated']);
    }

    public function delete_phone($id)
    {
        $phone=Phone_Contact::find($id);
        $phone->delete();
        return response()->json(['success'=>'deleted']);
    }
}
