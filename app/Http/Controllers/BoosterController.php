<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Boosters;
use Illuminate\Support\Facades\File;

class BoosterController extends Controller
{
    public function add_booster(Request $request)
    {
    	//get last id 
    	if(!Boosters::all()->isEmpty())
    	{
    		$last_id = Boosters::latest()->first()->id;
    	}
    	else{$last_id =0;}
    	
    	
    	$booster =new Boosters;
        $booster->arabic_comment=$request->input('arabic_comment');
        $booster->english_comment=$request->input('english_comment');
        
        //image
        if ($request->hasFile('booster_image')) 
        {
			$file = $request->file('booster_image');
			$filename= $last_id+1; // add the current id to the begining of file name to ease deleting
			$filename .= $file->getClientOriginalName();
			$file->move('images/boosters',$filename); // add image to spacific folder boosters
			$booster->image = $filename;
		}
		else
		{
			//in html the image input is required but if it happened and the request posted without image i put default image
			$booster->image = 'default.jpg'; //default image
		}
        
        $booster->save();
        //return back();
        return response()->json(['success'=>'added']);
    }

    public function update_booster($id, Request $request)
    {
    	$booster=Boosters::find($id);
        $booster->arabic_comment=$request->input('arabic_comment');
        $booster->english_comment=$request->input('english_comment');
        
        //image
        if ($request->hasFile('booster_image')) 
        {
        	if($booster->image != 'default.jpg') // if not default image
        	{
        		//delete existing image
	        	$image_path = public_path()."/images/boosters/".$booster->image;  //get image path
	        	if(File::exists($image_path)) 
				{
					File::delete($image_path);
				}
        	}
        	

			//add new image
			$file = $request->file('booster_image');
			$filename= $id; // add the current id to the begining of file name to ease deleting
			$filename .= $file->getClientOriginalName();
			$file->move('images/boosters',$filename); // add image to spacific folder boosters
			$booster->image = $filename;
        }
        $booster->save();
        return response()->json(['success'=>'updated']);
    }

    public function delete_booster($id)
    {
    	$booster=Boosters::find($id);
        
        //image
    	if($booster->image != 'default.jpg') // if not default image
    	{
    		//delete existing image
        	$image_path = public_path()."/images/boosters/".$booster->image;  //get image path
        	if(File::exists($image_path)) 
			{
				File::delete($image_path);
			}
    	}
        
        $booster->delete();

        // $boosters = Boosters::all();
        // $view = view('booster_section', compact('boosters'))->render();
        // return response()->json(['html'=>$view,'success'=>'deleted']);
        
        return response()->json(['success'=>'deleted']);
    }

    

}
