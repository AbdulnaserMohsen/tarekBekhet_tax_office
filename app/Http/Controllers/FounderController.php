<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Founder;

use Illuminate\Support\Facades\File;

class FounderController extends Controller
{
    
    public function add_founder(Request $request)
    {
    	//get last id 
    	if(!Founder::all()->isEmpty())
    	{
    		$last_id = Founder::latest()->first()->id;
    	}
    	else{$last_id =0;}
    	
    	
    	$founder =new Founder;
        
        $founder->arabic_name=$request->input('ARname');
        $founder->english_name=$request->input('ENname');

        $founder->arabic_job=$request->input('ARjob');
        $founder->english_job=$request->input('ENjob');
        
        //image
        if ($request->hasFile('founder_image')) 
        {
			$file = $request->file('founder_image');
			$filename= $last_id+1; // add the current id to the begining of file name to ease deleting
			$filename .= $file->getClientOriginalName();
			$file->move('images/aboutus',$filename); // add image to spacific folder aboutus
			$founder->image = $filename;
		}
		else
		{
			//in html the image input is required but if it happened and the request posted without image i put default image
			$founder->image = 'default.jpg'; //default image
		}
        
        $founder->save();
        
        return response()->json(['success'=>'added']);
    }

    
    public function update_founder($id, Request $request)
    {
    	$founder=Founder::find($id);
        
        $founder->arabic_name=$request->input('ARname');
        $founder->english_name=$request->input('ENname');

        $founder->arabic_job=$request->input('ARjob');
        $founder->english_job=$request->input('ENjob');
        
        //image
        if ($request->hasFile('founder_image')) 
        {
        	if($founder->image != 'default.jpg') // if not default image
        	{
        		//delete existing image
	        	$image_path = public_path()."/images/aboutus/".$founder->image;  //get image path
	        	if(File::exists($image_path)) 
				{
					File::delete($image_path);
				}
        	}
        	

			//add new image
			$file = $request->file('founder_image');
			$filename= $id; // add the current id to the begining of file name to ease deleting
			$filename .= $file->getClientOriginalName();
			$file->move('images/aboutus',$filename); // add image to spacific folder aboutus
			$founder->image = $filename;
        }
        $founder->save();
        return response()->json(['success'=>'updated']);
    }

    
    public function delete_founder($id)
    {
    	$founder=Founder::find($id);
        
        //image
    	if($founder->image != 'default.jpg') // if not default image
    	{
    		//delete existing image
        	$image_path = public_path()."/images/aboutus/".$founder->image;  //get image path
        	if(File::exists($image_path)) 
			{
				File::delete($image_path);
			}
    	}
        
        $founder->delete();

        // $boosters = Boosters::all();
        // $view = view('booster_section', compact('boosters'))->render();
        // return response()->json(['html'=>$view,'success'=>'deleted']);
        
        return response()->json(['success'=>'deleted']);
    }


}
