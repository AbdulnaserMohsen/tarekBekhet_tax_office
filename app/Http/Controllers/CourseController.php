<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;


use App\Course;


class CourseController extends Controller
{

	public function add_course(Request $request)
    {
    	//get last id 
    	if(!Course::all()->isEmpty())
    	{
    		$last_id = Course::latest()->first()->id;
    	}
    	else{$last_id =0;}
    	
    	
    	$course =new Course;
        
        $course->arabic_name=$request->input('ARcourseName');
        $course->english_name=$request->input('ENcourseName');

        $course->arabic_short_details=$request->input('ARcourseShDetail');
        $course->english_short_details=$request->input('ENcourseShDetail');
        
        $course->arabic_full_details=$request->input('ARcourseDescription');
        $course->english_full_details=$request->input('ENcourseDescription');

        $course->price = $request->input('price');
        $course->type = 0;

        //image
        if ($request->hasFile('course_image')) 
        {
			$file = $request->file('course_image');
			$filename= $last_id+1; // add the current id to the begining of file name to ease deleting
			$filename .= $file->getClientOriginalName();
			$file->move('images/courses',$filename); // add image to spacific folder courses
			$course->image = $filename;
		}
		else
		{
			//in html the image input is required but if it happened and the request posted without image i put default image
			$course->image = 'default.jpg'; //default image
		}
        
        $course->save();
        //return back();
        return response()->json(['success'=>'added']);
    }

    public function update_course($id, Request $request)
    {
    	$course=Course::find($id);
        
        $course->arabic_name=$request->input('ARcourseName');
        $course->english_name=$request->input('ENcourseName');

        $course->arabic_short_details=$request->input('ARcourseShDetail');
        $course->english_short_details=$request->input('ENcourseShDetail');
        
        $course->arabic_full_details=$request->input('ARcourseDescription');
        $course->english_full_details=$request->input('ENcourseDescription');

        $course->price = $request->input('price');

        //image
        if ($request->hasFile('course_image')) 
        {
        	if($course->image != 'default.jpg') // if not default image
        	{
        		//delete existing image
	        	$image_path = public_path()."/images/courses/".$course->image;  //get image path
	        	if(File::exists($image_path)) 
				{
					File::delete($image_path);
				}
        	}
        	
        	//add new image
			$file = $request->file('course_image');
			$filename= $id; // add the current id to the begining of file name to ease deleting
			$filename .= $file->getClientOriginalName();
			$file->move('images/courses',$filename); // add image to spacific folder courses
			$course->image = $filename;
        }

        $course->save();
        
        return response()->json(['success'=>'updated']);
    }


    public function delete_course($id)
    {
    	$course=Course::find($id);
        

        //image
    	if($course->image != 'default.jpg') // if not default image
    	{
    		//delete existing image
        	$image_path = public_path()."/images/courses/".$course->image;  //get image path
        	if(File::exists($image_path)) 
			{
				File::delete($image_path);
			}
    	}
        $course->delete();

        // //to set the new course_id in session
        // $nextcourse=Course::where('id', '>', $id)->orderBy('id','asc')->first();
        // if(!empty($nextcourse)){Session::put('course_id', $nextcourse->id);}
        // else
        // {
        // 	$nextcourse=Course::where('id', '<', $id)->orderBy('id','desc')->first();
        // 	if(!empty($nextcourse)){Session::put('course_id', $nextcourse->id);}
        // 	else{Session::forget('course_id');}
        // }

        return response()->json(['success'=>'deleted']);
    
    }

    public function archive_course($id)
    {
        $course=Course::find($id);
        $course->type = 1;
        $course->save();

        return response()->json(['success'=>'archived']);
    }

    

  //   public function get_course($id)
  //   {
		// Session::put('course_id', $id);
		// $a= Session::get('course_id');

  //   	return response()->json(['success'=>'gotten','a'=>$a]);

  //   	//$courses=Course::all();

  //   	//$view = view('course_section', compact('course','courses'))->render();
  //    	//return response()->json(['html'=>$view,'success'=>'gotten'])
    
  //   }
    

}
