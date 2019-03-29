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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('/addqustion', 'qustionController@store')->middleware('auth');

Route::post('/addqustion', 'qustionController@store')->middleware('auth');

Route::get('/view', 'qustionController@view')->middleware('auth');

//Route::get('/selcat', 'qustionController@selcata');
//Route::post('/selcat', 'qustionController@selcata');
Route::get('/useranswer', 'profileController@useranswer')->middleware('auth');

Route::get('/editprofile', 'profileController@editprof')->middleware('auth');

Route::post('/addqustion', 'qustionController@store')->middleware('auth');

Route::get('/qustion', 'qustionController@index')->middleware('auth');

Route::get('/blog', 'blogController@create')->middleware('auth');

Route::get('/profile', 'profileController@index')->middleware('auth');

Route::get('/userqustion', 'profileController@create')->middleware('auth');

Route::get('/catChooser','qustionController@catselect')->middleware('auth');

Route::get('/viewqust/{id}','qustionController@viewqust')->middleware('auth');

Route::post('/viewqust/{id}','qustionController@viewqust')->middleware('auth');
Route::get('/contactus','profileController@contactus')->middleware('auth');




Route::post('/catss',function(){
    if(Request::ajax()){

        $ar = Request::input();


        for ($i=1; $i <= count($ar); $i++) {
            if($ar[$i] === "0"){continue;}
            $user=new App\UserCatagory();
            $user->catagoty_id=$i;
            $user->user_id=Auth::User()->id;
            $user->save();
        }}

});

//Route::get('/catsss', function(){
//
//  $v=new App\UserCatagory();
// return  view ("/home");
//
//});





