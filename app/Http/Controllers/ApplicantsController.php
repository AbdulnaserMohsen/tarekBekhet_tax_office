<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;


use App\Applicant;
use App\Course;
use App\Branch;
use App\Phone_Contact;
use App\Email_Contact;
use App\Social_Media_Contact;

class ApplicantsController extends Controller
{
    public function add_applicant($course_id,Request $request)
    {
    	
    	$applicant =new Applicant;
        
        $applicant->name=$request->input('name');
        //$applicant->email=$request->input('email');
        
        $applicant->phone=$request->input('phone');
        //$applicant->national_id=$request->input('nationalID');
        
        $applicant->faculty=$request->input('faculty');
        $applicant->department=$request->input('department');

        $lang="";
        switch ($request->input('language'))
         {
            case 1:
                $lang= "عربي";
                break;
            
            case 2:
                $lang= "English";
                break;

            case 3:
                $lang= "langue française";
                break;
        }
        $applicant->language=$lang;

        $applicant->graduated_year=$request->input('gradYear');

        $grade="";
        switch ($request->input('grade'))
         {
            case 1:
                $grade= "مقبول";
                break;
            
            case 2:
                $grade= "جيد";
                break;

            case 3:
                $grade= "جيد جدا ";
                break;

            case 4:
                $grade= "ممتاز";
                break;
            
            case 5:
                $grade= "جيد جدا مع مرتبة الشرف ";
                break;

            case 6:
                $grade= "ممتاز مع مرتبة الشرف ";
                break;
        }

        $applicant->grade=$grade;

        if ($request->input('email') != null) {$applicant->email=$request->input('email');} 
        else{$applicant->email=" s";}
        
        if ($request->input('nationalID') != null) {$applicant->national_id=$request->input('nationalID');}
        else{$applicant->national_id=" d";}

        $applicant->course_id=$course_id;


        $applicant->save();
        return response()->json(['success'=>'added']);
    }

    private function header()
	{
		$lang=App::getLocale();
        $dir='rtl';
        if($lang=='ar')
        	$dir='rtl';
        else
        	$dir='ltr';

        $adminPage = false;
        $toAnotherPage = false;

        return [$lang,$dir,$adminPage,$toAnotherPage];

	}

    public function applicants(Request $request)
    {
    	list($lang, $dir, $adminPage,$toAnotherPage) = $this->header();
    	$toAnotherPage = true;

    	$branches = Branch::all();
        $mobiles = Phone_Contact::where('type',1)->get();
        $grounds = Phone_Contact::where('type',2)->get();
        $whatses = Phone_Contact::where('type',3)->get();
        $emails = Email_Contact::all();
        $facebooks = Social_Media_Contact::where('type',1)->get();
        $twitters = Social_Media_Contact::where('type',2)->get();
        $instagrams = Social_Media_Contact::where('type',3)->get();
        $linkedins = Social_Media_Contact::where('type',4)->get();


        $courses = Course::where('type',0)->paginate(6);
        $applicants = Applicant::all();

        return view('courses applications',compact('lang','dir','adminPage','toAnotherPage','branches','mobiles','grounds','whatses','emails','facebooks','twitters','instagrams','linkedins','courses','applicants'));
    }

    public function update_applicant($id, Request $request)
    {
    	$applicant=Applicant::find($id);
       
        $applicant->arabic_title=$request->input('ARtitle');
        $applicant->english_title=$request->input('ENtitle');
        
        $applicant->arabic_short_note=$request->input('ARshort');
        $applicant->english_short_note=$request->input('ENshort');
        
        $applicant->arabic_full_note=$request->input('ARdescription');
        $applicant->english_full_note=$request->input('ENdescription');
        
        $applicant->save();
        return response()->json(['success'=>'updated']);
    }

    public function delete_applicant($id)
    {
        $applicant=Applicant::find($id);
        $applicant->delete();
        return response()->json(['success'=>'deleted']);
    }
}
