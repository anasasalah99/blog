<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/test3/{id}', function ($id) {
    return 'welcome3'.$id;
})->name('a');



Route::get('/test2', function () {
    return 'welcome2';
})->name('b');


Route::get('/login',function (){

    return 'Must be login to access ';

})->name('login');


Route::group(['namespace' =>'Admin'],function(){


    Route::get('second1','SecondController@showSecondUser');
    Route::get('second2','SecondController@showSecondUser2');
    Route::get('second3','SecondController@showSecondUser3');

});

Route::resource('news','NewsController');

/*

Route::group(['middleware'  => 'auth'],function(){

    Route::get('second2','SecondController@index');

});
*/

Route::get('index','Front\UserController@getindex');


Route::get('landing',function (){


    return view ('landing');

});


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/redirect/{service}','SocialController@redirect');
Route::get('/callback/{service}','SocialController@callback');
Route::get('/fillable','CrudController@getOffers');

Route::group(['prefix' => 'offers'],function(){

   // Route::get('store','CrudController@store');
    Route::get('create','CrudController@create');
    Route::post('store','CrudController@store')-> name('offers.store');

});
