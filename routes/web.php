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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/user', 'HomeController@index')->name('home');



###############  Begin Auth and gards

Route::get('/adult' , 'CustomAuthController@adult')->middleware('checkAge');


Route::group(['middleware'=>'checkmens'] , function(){
    Route::get('mens' , 'MensController@index')->name('mens');
    Route::get('/dashboard' , function(){
        dd("asdadS");
        return "not allowe";
    })->name('not.adult');
});


###############  end Auth and gards 