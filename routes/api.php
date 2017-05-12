<?php

use Illuminate\Http\Request;

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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 */

//Route::auth();

Route::post('/users/login', 'Auth\LoginController@UserLogin');

Route::post('/users/logout', 'Auth\LoginController@UserLogout');

Route::resource('/admins', 'AdminController');

Route::resource('/schools', 'SchoolDataController');

//Route::resource('/users', 'SchoolUserController');

Route::post('/personal-and-priority-data-importer', 'PersonalAndPriorityDataImportController@import');

Route::get('/db-schema-to-md', 'DBSchemaToMDController@export');

Route::get('/limesurvey-filemtime', 'LimesurveyFilemtimeController@export');
