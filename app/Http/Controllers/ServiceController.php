<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;

class ServiceController extends Controller
{
    public function add_service(Request $request)
    {
    	
    	$service =new Service;
        
        $service->arabic_title=$request->input('ARtitle');
        $service->english_title=$request->input('ENtitle');
        
        $service->arabic_short_note=$request->input('ARshort');
        $service->english_short_note=$request->input('ENshort');
        
        $service->arabic_full_note=$request->input('ARdescription');
        $service->english_full_note=$request->input('ENdescription');

        $service->type=$request->input('type');
                
        $service->save();
        return response()->json(['success'=>'added']);
    }

    public function update_service($id, Request $request)
    {
    	$service=Service::find($id);
       
        $service->arabic_title=$request->input('ARtitle');
        $service->english_title=$request->input('ENtitle');
        
        $service->arabic_short_note=$request->input('ARshort');
        $service->english_short_note=$request->input('ENshort');
        
        $service->arabic_full_note=$request->input('ARdescription');
        $service->english_full_note=$request->input('ENdescription');
        
        $service->save();
        return response()->json(['success'=>'updated']);
    }

    public function delete_service($id)
    {
        $service=Service::find($id);
        $service->delete();
        return response()->json(['success'=>'deleted']);
    }

}
