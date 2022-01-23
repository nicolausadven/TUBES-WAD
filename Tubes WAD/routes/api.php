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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', 'CustomAuthController@login');
    Route::post('/logout', 'CustomAuthController@logout');
    Route::post('/refresh', 'CustomAuthController@refresh');
    Route::get('/user-profile', 'CustomAuthController@me');
});

Route::post('auth/register', 'CustomAuthController@register');
Route::get('auth/check-number', 'StaffController@checkIfNumberRegistered');




Route::prefix("pengajuan")->group(function (){
    $cr = "PengajuanSKUController";
    $cr2 = "PengajuanTrackingController";
    Route::any('self-check', "$cr@selfCheck");
    Route::any('history', "$cr2@getHistory");
    Route::any('activeEvent', "$cr@getActiveEvent");
    Route::any('currentUser', "$cr@getCurrentUser");
    Route::post('upload', "$cr@upload");
});





Route::group(['middleware' => ['auth:api']], function () {
    Route::prefix('user')->group(function () {
        Route::post('/update-photo', 'StaffController@updateProfilePhoto');
        Route::post('/update-data', 'StaffController@update');
        Route::post('/change-password', 'StaffController@updatePassword');
    });


    Route::post('save-user', 'UserController@saveUser');
    Route::put('edit-user', 'UserController@editUser');
});






