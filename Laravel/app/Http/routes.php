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

Route::get('/saludo', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/',function(){
        return view('home');
    });

    Route::get('lang/{lang}', function ($lang) {
        session(['lang'=>$lang]);
        return Redirect('/');

    })->where([
        'lang' => 'en|es'
    ]);

});
