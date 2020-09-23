<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Branch;

use Illuminate\Support\Facades\File;

class BranchController extends Controller
{
	public function add_branch(Request $request)
    {
    	//get last id 
    	if(!Branch::all()->isEmpty())
    	{
    		$last_id = Branch::latest()->first()->id;
    	}
    	else{$last_id =0;}
    	
    	
    	$branch =new Branch;
        
        $branch->arabic_address=$request->input('ARaddress');
        $branch->english_address=$request->input('ENaddress');

        $branch->google_location=$request->input('location');
        $branch->phone=$request->input('phone');
        
        //image
        if ($request->hasFile('branch_image')) 
        {
			$file = $request->file('branch_image');
			$filename= $last_id+1; // add the current id to the begining of file name to ease deleting
			$filename .= $file->getClientOriginalName();
			$file->move('images/branches',$filename); // add image to spacific folder branches
			$branch->image = $filename;
		}
		else
		{
			//in html the image input is required but if it happened and the request posted without image i put default image
			$branch->image = 'default.jpg'; //default image
		}
        
        $branch->save();
        
        return response()->json(['success'=>'added']);
    }

    
    public function update_branch($id, Request $request)
    {
    	$branch=Branch::find($id);
        
        $branch->arabic_address=$request->input('ARaddress');
        $branch->english_address=$request->input('ENaddress');

        $branch->google_location=$request->input('location');
        $branch->phone=$request->input('phone');
        
        //image
        if ($request->hasFile('branch_image')) 
        {
        	if($branch->image != 'default.jpg') // if not default image
        	{
        		//delete existing image
	        	$image_path = public_path()."/images/branches/".$branch->image;  //get image path
	        	if(File::exists($image_path)) 
				{
					File::delete($image_path);
				}
        	}
        	

			//add new image
			$file = $request->file('branch_image');
			$filename= $id; // add the current id to the begining of file name to ease deleting
			$filename .= $file->getClientOriginalName();
			$file->move('images/branches',$filename); // add image to spacific folder branches
			$branch->image = $filename;
        }
        $branch->save();
        return response()->json(['success'=>'updated']);
    }

    
    public function delete_branch($id)
    {
    	$branch=Branch::find($id);
        
        //image
    	if($branch->image != 'default.jpg') // if not default image
    	{
    		//delete existing image
        	$image_path = public_path()."/images/branches/".$branch->image;  //get image path
        	if(File::exists($image_path)) 
			{
				File::delete($image_path);
			}
    	}
        
        $branch->delete();

        // $boosters = Boosters::all();
        // $view = view('booster_section', compact('boosters'))->render();
        // return response()->json(['html'=>$view,'success'=>'deleted']);
        
        return response()->json(['success'=>'deleted']);
    }

}
