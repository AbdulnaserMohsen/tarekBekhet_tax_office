<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//admin
Route::get('admin/index','UserController@admin')->name('admin');
	
	//boosters
	Route::post('admin/add_booster','BoosterController@add_booster')->name('add_booster');
	Route::post('admin/update_booster/{id}','BoosterController@update_booster')->name('update_booster');
	Route::get('admin/delete_booster/{id}','BoosterController@delete_booster')->name('delete_booster');

	//service
	Route::post('admin/add_service','ServiceController@add_service')->name('add_service');
	Route::post('admin/update_service/{id}','ServiceController@update_service')->name('update_service');
	Route::get('admin/delete_service/{id}','ServiceController@delete_service')->name('delete_service');

	//courses
	Route::post('admin/add_course','CourseController@add_course')->name('add_course');
	Route::post('admin/update_course/{id}','CourseController@update_course')->name('update_course');
	Route::get('admin/delete_course/{id}','CourseController@delete_course')->name('delete_course');
	Route::get('admin/archive_course/{id}','CourseController@archive_course')->name('archive_course');

	//founder
	Route::post('admin/add_founder','FounderController@add_founder')->name('add_founder');
	Route::post('admin/update_founder/{id}','FounderController@update_founder')->name('update_founder');
	Route::get('admin/delete_founder/{id}','FounderController@delete_founder')->name('delete_founder');

	//branches
	Route::post('admin/add_branch','BranchController@add_branch')->name('add_branch');
	Route::post('admin/update_branch/{id}','BranchController@update_branch')->name('update_branch');
	Route::get('admin/delete_branch/{id}','BranchController@delete_branch')->name('delete_branch');

	//mobiles
	Route::post('admin/add_mobile','PhoneController@add_mobile')->name('add_mobile');
	Route::post('admin/add_ground','PhoneController@add_ground')->name('add_ground');
	Route::post('admin/add_whats','PhoneController@add_whats')->name('add_whats');
	Route::post('admin/update_phone/{id}','PhoneController@update_phone')->name('update_phone');
	Route::get('admin/delete_phone/{id}','PhoneController@delete_phone')->name('delete_phone');

	//emails
	Route::post('admin/add_email','EmailController@add_email')->name('add_email');
	Route::post('admin/update_email/{id}','EmailController@update_email')->name('update_email');
	Route::get('admin/delete_email/{id}','EmailController@delete_email')->name('delete_email');

	//social_media_links
	Route::post('admin/add_facebook','SocialController@add_facebook')->name('add_facebook');
	Route::post('admin/add_twitter','SocialController@add_twitter')->name('add_twitter');
	Route::post('admin/add_instagram','SocialController@add_instagram')->name('add_instagram');
	Route::post('admin/add_linkedin','SocialController@add_linkedin')->name('add_linkedin');
	Route::post('admin/update_link/{id}','SocialController@update_link')->name('update_link');
	Route::get('admin/delete_link/{id}','SocialController@delete_link')->name('delete_link');

	//applicants
	Route::get('admin/applicants','ApplicantsController@applicants')->name('applicants');

	
	Route::post('admin/update_email/{id}','EmailController@update_email')->name('update_email');
	Route::get('admin/delete_email/{id}','EmailController@delete_email')->name('delete_email');



//user
Route::get('user/index','UserController@index')->name('index');
	
	//applicant
	Route::post('user/add_applicant/{course_id}','ApplicantsController@add_applicant')->name('add_applicant');