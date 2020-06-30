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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('user', 'UserController');
Route::resource('role', 'RoleController');
Route::resource('unicorn', 'UnicornController');
Route::resource('breeding', 'BreedingController');
Route::resource('company', 'CompanyController');
Route::resource('command', 'CommandController');
Route::resource('customer', 'CustomerController');
Route::resource('bred', 'BredController');
Route::resource('entity', 'EntityController');
