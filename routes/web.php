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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::group([
    'name' => 'Auth',
    'prefix' => '',
    'middleware' => 'auth'
],
    function (){
        Route::get('/home/{filter?}', 'HomeController@index')->name('home');
        Route::put('/profile/update','UserController@update')->name('profile.update');
        Route::get('/profile',['uses'=>'UserController@editProfile'])->name('profile.edit');
        Route::put('password/change','UserController@changePassword')->name('password.update');

        Route::get('bills/export', 'BillController@export')->name('bills.export');
    });




  