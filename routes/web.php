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

//Route::resource('user', 'UserController');
//Route::resource('role', 'RoleController');

Route::get('/entreprises', 'CompanyController@index')->name('companies.index');
Route::get('/entreprises/{id}/show', 'CompanyController@show')->name('companies.show');
Route::get('/entreprises/create', 'CompanyController@create')->name('companies.create');
Route::get('/entreprises/{id}/edit', 'CompanyController@edit')->name('companies.edit');
Route::post('/entreprises', 'CompanyController@store')->name('companies.store');
Route::put('/entreprises/{id}', 'CompanyController@update')->name('companies.update');
Route::delete('/entreprises', 'CompanyController@destroy')->name('companies.destroy');

Route::get('/clients', 'CustomerController@index')->name('customers.index');
Route::get('/clients/{id}/show', 'CustomerController@show')->name('customers.show');
Route::get('/clients/create', 'CustomerController@create')->name('customers.create');
Route::get('/clients/{id}/edit', 'CustomerController@edit')->name('customers.edit');
Route::post('/clients', 'CustomerController@store')->name('customers.store');
Route::put('/clients/{id}', 'CustomerController@update')->name('customers.update');
Route::delete('/clients', 'CustomerController@destroy')->name('customers.destroy');

Route::get('/licornes', 'UnicornController@index')->name('unicorns.index');
Route::get('/licornes/{id}/show', 'UnicornController@show')->name('unicorns.show');
Route::get('/licornes/create', 'UnicornController@create')->name('unicorns.create');
Route::get('/licornes/{id}/edit', 'UnicornController@edit')->name('unicorns.edit');
Route::post('/licornes', 'UnicornController@store')->name('unicorns.store');
Route::put('/licornes/{id}', 'UnicornController@update')->name('unicorns.update');
Route::delete('/licornes', 'UnicornController@destroy')->name('unicorns.destroy');

Route::get('/elevages', 'BreedingController@index')->name('breedings.index');
Route::get('/elevages/{id}/show', 'BreedingController@show')->name('breedings.show');
Route::get('/elevages/create', 'BreedingController@create')->name('breedings.create');
Route::get('/elevages/{id}/edit', 'BreedingController@edit')->name('breedings.edit');
Route::post('/elevages', 'BreedingController@store')->name('breedings.store');
Route::put('/elevages/{id}', 'BreedingController@update')->name('breedings.update');
Route::delete('/elevages', 'BreedingController@destroy')->name('breedings.destroy');

Route::get('/saillies', 'BredController@index')->name('breds.index');
Route::get('/saillies/{id}/show', 'BredController@show')->name('breds.show');
Route::get('/saillies/create', 'BredController@create')->name('breds.create');
Route::get('/saillies/{id}/edit', 'BredController@edit')->name('breds.edit');
Route::post('/saillies', 'BredController@store')->name('breds.store');
Route::put('/saillies/{id}', 'BredController@update')->name('breds.update');
Route::delete('/saillies', 'BredController@destroy')->name('breds.destroy');

Route::get('/commandes', 'CommandController@index')->name('commands.index');
Route::get('/commandes/{id}/show', 'CommandController@show')->name('commands.show');
Route::get('/commandes/create', 'CommandController@create')->name('commands.create');
Route::get('/commandes/{id}/edit', 'CommandController@edit')->name('commands.edit');
Route::post('/commandes', 'CommandController@store')->name('commands.store');
Route::put('/commandes/{id}', 'CommandController@update')->name('commands.update');
Route::delete('/commandes', 'CommandController@destroy')->name('commands.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
