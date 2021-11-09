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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/userList', 'UserController@userList')->name('userList');

Route::get('/myPage', 'UserController@myPage')->name('myPage');

Route::post('/myPage', 'UserController@castCreate')->name('castCreate');

Route::get('/create_case/{cast_id}', 'CaseController@create')->name('create_case');
