<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

use App\Boosters;
use App\Service;
use App\Course;
use App\Founder;
use App\Branch;
use App\Phone_Contact;
use App\Email_Contact;
use App\Social_Media_Contact;


class UserController extends Controller
{
	public function __construct() 
	{
    	//get language value from session or database. Set it on setLocale method
    	$lang = 'en'; //this value should dynamic
    	App::setLocale($lang);
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


	
	public function index()
    {
    	list($lang, $dir, $adminPage,$toAnotherPage) = $this->header();

        $boosters = Boosters::all();
        $accounts = Service::where('type',0)->get();
        $electronics = Service::where('type',1)->get();
        $courses = Course::where('type',0)->get();
        $founders = Founder::all();
        $branches = Branch::all();
        $mobiles = Phone_Contact::where('type',1)->get();
        $grounds = Phone_Contact::where('type',2)->get();
        $whatses = Phone_Contact::where('type',3)->get();
        $emails = Email_Contact::all();
        $facebooks = Social_Media_Contact::where('type',1)->get();
        $twitters = Social_Media_Contact::where('type',2)->get();
        $instagrams = Social_Media_Contact::where('type',3)->get();
        $linkedins = Social_Media_Contact::where('type',4)->get();

        return view('index',compact('lang','dir','adminPage','toAnotherPage','boosters','accounts','electronics','courses','founders','branches','mobiles','grounds','whatses','emails','facebooks','twitters','instagrams','linkedins'));
    }

    public function admin(Request $requset)
    {
    	list($lang, $dir, $adminPage,$toAnotherPage) = $this->header();
    	$adminPage = true;


    	// $a= Session::get('course_id');
    	// if (!Session::has('course_id')) 
    	// {
    	// 	$c = Course::first();
    	// 	if(!empty($c))
    	// 	{
    	// 		Session::put('course_id', $c->id);
    	// 		$a= Session::get('course_id');
    	// 	}
    	// }

    	// if($requset->ajax())
        // {
        // 	//return response()->json(['success'=>'paginated']);
        // 	//dd($accounts,$electronics);
        // 	$accounts = Service::where('type',0)->paginate(3);
        // 	if($accounts->hasMorePages()){$accounts = Service::where('type',0)->paginate(3);}
        // 	else{$accounts = $accounts->items();}
        	
        // 	$boosters = Boosters::paginate(5);
        // 	$electronics = Service::where('type',1)->paginate(3);
        // 	$courses = Course::all();
        // 	$course = Course::where('id', $a)->get()->first();
        // 	$founders = Founder::all();
        // 	$branches = Branch::all();
        // 	$phones = Phone_Contact::all();
        // 	$emails = Email_Contact::all();
        // 	$links = Social_Media_Contact::all();

        // 	//dd($accounts,$electronics);
        // 	//return view('admin',compact('lang','dir','adminPage','boosters','accounts','electronics','courses','course','founders'));
        // }
        // else
        // {
        	$boosters = Boosters::paginate(5);
        	$accounts = Service::where('type',0)->paginate(3);
        	$electronics = Service::where('type',1)->paginate(3);
        	$courses = Course::where('type',0)->paginate(1);
        	$founders = Founder::paginate(3);
        	$branches = Branch::paginate(3);
        	$mobiles = Phone_Contact::where('type',1)->paginate(2);
            $grounds = Phone_Contact::where('type',2)->paginate(2);
            $whatses = Phone_Contact::where('type',3)->paginate(2);
        	$emails = Email_Contact::paginate(2);
        	$facebooks = Social_Media_Contact::where('type',1)->paginate(2);
            $twitters = Social_Media_Contact::where('type',2)->paginate(2);
            $instagrams = Social_Media_Contact::where('type',3)->paginate(2);
            $linkedins = Social_Media_Contact::where('type',4)->paginate(2);
        // }


      
        
        return view('admin',compact('lang','dir','adminPage','toAnotherPage','boosters','accounts','electronics','courses','founders','branches','mobiles','grounds','whatses','emails','facebooks','twitters','instagrams','linkedins'));
    }


    
    
}
