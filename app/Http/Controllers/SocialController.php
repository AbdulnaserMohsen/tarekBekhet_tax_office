<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Social_Media_Contact;

class SocialController extends Controller
{
	
	public function add_facebook(Request $request)
    {
    	
    	$link =new Social_Media_Contact;
        
        $link->link=$request->input('fblink');
        $link->type=1;
                
        $link->save();
        return response()->json(['success'=>'added']);
    }

	public function add_twitter(Request $request)
    {
    	
    	$link =new Social_Media_Contact;
        
        $link->link=$request->input('twitlink');
        $link->type=2;
                
        $link->save();
        return response()->json(['success'=>'added']);
    }

    public function add_instagram(Request $request)
    {
    	
    	$link =new Social_Media_Contact;
        
        $link->link=$request->input('instlink');
        $link->type=3;
                
        $link->save();
        return response()->json(['success'=>'added']);
    }

    public function add_linkedin(Request $request)
    {
    	
    	$link =new Social_Media_Contact;
        
        $link->link=$request->input('inlink');
        $link->type=4;
                
        $link->save();
        return response()->json(['success'=>'added']);
    }

    public function update_link($id, Request $request)
    {
    	$link=Social_Media_Contact::find($id);

    	$link->link=$request->input('link');

    	if ($request->has('fblink')) {$link->link=$request->input('fblink');}
    	else if($request->input('twitlink')){$link->link=$request->input('twitlink');}
    	else if($request->input('instlink')){$link->link=$request->input('instlink');}
    	else if($request->input('inlink')){$link->link=$request->input('inlink');}

        $link->save();
        return response()->json(['success'=>'updated']);
    }

    public function delete_link($id)
    {
        $link=Social_Media_Contact::find($id);
        $link->delete();
        return response()->json(['success'=>'deleted']);
    }

}
