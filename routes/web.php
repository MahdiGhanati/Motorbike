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

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(
    [
        'middleware' => ['adminRole'],
    ],
    function(){
        Route::get('/home', 'HomeController@index')->name('home');
        //Route::get('/list', 'HomeController@index');
        Route::get('/add', 'HomeController@add');
        Route::post('/addbike', 'HomeController@addbike');
        Route::get('/list', 'HomeController@bikelist');
        Route::post('/filterbike', 'HomeController@filterbike');
    });


 Route::get('/motor', 'UserController@index')->name('home');
 Route::get('/motorlist', 'UserController@bikelist');
 Route::post('/filter', 'UserController@filterbike');
 Route::get('/show/{id}', 'UserController@showbike');


Route::get('/welcome', 'WelcomeController@index');
Route::get('/welcome/logout', 'WelcomeController@logout');

Route::get('/logout', function()
{
    Auth::logout();
    return view('/');
});