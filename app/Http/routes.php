<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');



// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);


// Route::get('/', 'IndexBlade@index');


Route::get('/', function () {
	$data = DB::table('members')->get();
	return view('index', compact('data'));
});

// add form member
Route::post('/add/member', 'MemberCtr@addMember');

// edit form member
Route::get('../resources/edit/member/(id)', function($id) {
	$data = DB::table('members')
					->where('id','=',$id)
					->get();
	return view('edit_form', compact('data'));
});

// update form member
Route::post('/update/member', 'MemberCtr@updateMember');

// delete
Route::get('/delete/member/(id)', 'MemberCtr@deleteMember');



// for profit

// Route::get('/', function () {
// 	$dataprofit = DB::table('membersprofit')->get();
// 	return view('index', compact('data'));
// });

// add form member
// Route::post('/add/memberprofit', 'MemberprofitCtr@addprofitMember');