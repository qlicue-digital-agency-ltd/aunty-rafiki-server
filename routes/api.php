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

///Appointments End Points
Route::post('appointments', ['uses' => 'AppointmentController@getAppointments']);
Route::post('appointment', ['uses' => 'AppointmentController@postAppointment']);
Route::put('appointment/{appointmentId}', ['uses' => 'AppointmentController@putAppointment']);
Route::get('appointment/{appointmentId}', ['uses' => 'AppointmentController@getAppointment']);
Route::delete('appointment/{appointmentId}', ['uses' => 'AppointmentController@deleteAppointment']);

///BloodLevels End Points
Route::post('bloodlevel', ['uses' => 'BloodLevelController@postBloodLevel']);
Route::get('bloodlevels/{userId}', ['uses' => 'BloodLevelController@getBloodLevels']);
Route::put('bloodlevel/{bloodlevelId}', ['uses' => 'BloodLevelController@putBloodLevel']);
Route::get('bloodlevel/{bloodlevelId}', ['uses' => 'BloodLevelController@getBloodLevel']);
Route::delete('bloodlevel/{bloodlevelId}', ['uses' => 'BloodLevelController@deleteBloodLevel']);


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
