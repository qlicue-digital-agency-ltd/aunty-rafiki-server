<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



///Trackers End Points
Route::post('trackers', ['uses' => 'TrackerController@getTrackers']);
Route::post('tracker', ['uses' => 'TrackerController@postTracker']);
Route::put('tracker/{trackerId}', ['uses' => 'TrackerController@putTracker']);
Route::get('tracker/{trackerId}', ['uses' => 'TrackerController@getTracker']);
Route::delete('tracker/{trackerId}', ['uses' => 'TrackerController@deleteTracker']);

//User End Points
Route::get('/users', 'UserController@users');
Route::post('/signup', 'UserController@register');
Route::post('/login', 'UserController@login');
Route::post('/logout', 'UserController@logout');
Route::post('/login/client', 'UserController@loginClient');


//Routes of profiles
Route::get('profiles', ['uses' => 'ProfileController@getProfiles']);
Route::post('profile', ['uses' => 'ProfileController@postProfile']);
Route::get('profile/{profileId}', ['uses' => 'ProfileController@getProfile']);
Route::post('editProfile/{profileId}', ['uses' => 'ProfileController@putProfile']);
Route::delete('profile/{profileId}', ['uses' => 'ProfileController@deleteProfile']);
Route::get('profile/avatar/{profileId}', ['uses' => 'ProfileController@viewProfileImage']);


//Routes of Roles
Route::get('roles', ['uses' => 'RoleController@getRoles']);
