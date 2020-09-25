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

Route::get('/admin', function () {
    return 'welcome to admin page ';
});

/*
Route::namespace('Front')->group(function (){

    Route::get('users','UserController@showAdminName');
});
*/

Route::group(['prefix'=>'users','middleware'=> 'auth'],function(){


    Route::get('/',function (){


        return 'work';

    });



    Route::get('/login',function (){

        return view('login');

    });
});