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
Route::get('blood', ['uses' => 'BloodLevelController@getBlood']);
Route::get('bloodlevels/{uid}', ['uses' => 'BloodLevelController@getBloodLevels']);
Route::put('bloodlevel/{bloodlevelId}', ['uses' => 'BloodLevelController@putBloodLevel']);
Route::get('bloodlevel/{bloodlevelId}', ['uses' => 'BloodLevelController@getBloodLevel']);
Route::delete('bloodlevel/{bloodlevelId}', ['uses' => 'BloodLevelController@deleteBloodLevel']);

///BagItems End Points
Route::post('bagItem', ['uses' => 'BagItemController@postBagItem']);
Route::get('bagItems/{uid}', ['uses' => 'BagItemController@getBagItems']);
Route::get('createBagItems/{uid}', ['uses' => 'BagItemController@seedUIDBagItems']);
Route::put('bagItem/{bagitemId}', ['uses' => 'BagItemController@putBagItem']);
Route::get('bagItem/{bagitemId}', ['uses' => 'BagItemController@getBagItem']);
Route::delete('bagItem/{bagitemId}', ['uses' => 'BagItemController@deleteBagItem']);

///Tasks End Points
Route::post('task', ['uses' => 'TaskController@postTask']);
Route::get('tasks/{userId}', ['uses' => 'TaskController@getTasks']);
Route::put('task/{taskId}', ['uses' => 'TaskController@putTask']);
Route::get('task/{taskId}', ['uses' => 'TaskController@getTask']);
Route::delete('task/{taskId}', ['uses' => 'TaskController@deleteTask']);

///Timelines End Points
Route::post('timeline', ['uses' => 'TimelineController@postTimeline']);
Route::get('timelines', ['uses' => 'TimelineController@getTimelines']);
Route::put('timeline/{timelineId}', ['uses' => 'TimelineController@putTimeline']);
Route::get('timeline/{timelineId}', ['uses' => 'TimelineController@getTimeline']);
Route::delete('timeline/{timelineId}', ['uses' => 'TimelineController@deleteTimeline']);

///Foods End Points
Route::post('food', ['uses' => 'FoodController@postFood']);
Route::get('foods', ['uses' => 'FoodController@getFoods']);
Route::put('food/{foodId}', ['uses' => 'FoodController@putFood']);
Route::get('food/{foodId}', ['uses' => 'FoodController@getFood']);
Route::delete('food/{foodId}', ['uses' => 'FoodController@deleteFood']);

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

///Mothers End Points
Route::post('mother', ['uses' => 'MotherController@postMother']);
Route::get('mothers', ['uses' => 'MotherController@getMothers']);
Route::put('mother/{motherId}', ['uses' => 'MotherController@putMother']);
Route::get('mother/{motherId}', ['uses' => 'MotherController@getMother']);
Route::delete('mother/{motherId}', ['uses' => 'MotherController@deleteMother']);

///Mothers End Points
Route::post('pregnacy', ['uses' => 'PregnacyController@postPregnacy']);
Route::get('pregnacies', ['uses' => 'PregnacyController@getPregnacies']);
Route::put('pregnacy/{pregnacyId}', ['uses' => 'PregnacyController@putPregnacy']);
Route::get('pregnacy/{pregnacyId}', ['uses' => 'PregnacyController@getPregnacy']);
Route::delete('pregnacy/{pregnacyId}', ['uses' => 'PregnacyController@deletePregnacy']);

//Routes of Roles
Route::get('roles', ['uses' => 'RoleController@getRoles']);
