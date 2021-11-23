<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/myPage', 'App\Http\Controllers\UserController@myPage')->name('myPage')->middleware('auth');
// Route::get('/myPage/{cast_id}', 'App\Http\Controllers\UserController@myCastInfo');

Route::post('/myPage', 'UserController@myCastInfo');
// Route::group(['middleware' => ['api']], function(){
//     Route::get('/myPage', 'UserController@myCastInfo');
// });
// Route::post('/myPage/{c_id}', 'App\Http\Controllers\UserController@myCastInfo');
// Route::get('/myPage/{cast_id}', 'UserController@myCastInfo');