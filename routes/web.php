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

/**
 * Entreprises
 */
Route::get('/entreprises', 'CompanyController@index')->name('companies.index');
Route::get('/entreprises/{id}/show', 'CompanyController@show')->name('companies.show');
Route::get('/entreprises/create', 'CompanyController@create')->name('companies.create')->middleware('auth');
Route::get('/entreprises/{id}/edit', 'CompanyController@edit')->name('companies.edit')->middleware('auth');
Route::post('/entreprises', 'CompanyController@store')->name('companies.store')->middleware('auth');
Route::put('/entreprises/{id}', 'CompanyController@update')->name('companies.update')->middleware('auth');
Route::delete('/entreprises', 'CompanyController@destroy')->name('companies.destroy')->middleware('auth');

/**
 * Licornes de reproduction
 */
Route::get('/licornes', 'UnicornController@index')->name('unicorns.index');
Route::get('/licornes/{id}/show', 'UnicornController@show')->name('unicorns.show');
Route::get('/licornes/create', 'UnicornController@create')->name('unicorns.create')->middleware('auth');
Route::get('/licornes/{id}/edit', 'UnicornController@edit')->name('unicorns.edit')->middleware('auth');
Route::post('/licornes', 'UnicornController@store')->name('unicorns.store')->middleware('auth');
Route::put('/licornes/{id}', 'UnicornController@update')->name('unicorns.update')->middleware('auth');
Route::delete('/licornes', 'UnicornController@destroy')->name('unicorns.destroy')->middleware('auth');

/**
 * Elevages
 */
Route::get('/elevages', 'BreedingController@index')->name('breedings.index');
Route::get('/elevages/{id}/show', 'BreedingController@show')->name('breedings.show');
Route::get('/elevages/create', 'BreedingController@create')->name('breedings.create')->middleware('auth');
Route::get('/elevages/{id}/edit', 'BreedingController@edit')->name('breedings.edit')->middleware('auth');
Route::post('/elevages', 'BreedingController@store')->name('breedings.store')->middleware('auth');
Route::put('/elevages/{id}', 'BreedingController@update')->name('breedings.update')->middleware('auth');
Route::delete('/elevages', 'BreedingController@destroy')->name('breedings.destroy')->middleware('auth');

/**
 * Saillies
 */
Route::get('/saillies', 'BredController@index')->name('breds.index');
Route::get('/saillies/{id}/show', 'BredController@show')->name('breds.show');
Route::get('/saillies/create', 'BredController@create')->name('breds.create')->middleware('auth');
Route::get('/saillies/{id}/edit', 'BredController@edit')->name('breds.edit')->middleware('auth');
Route::post('/saillies', 'BredController@store')->name('breds.store')->middleware('auth');
Route::put('/saillies/{id}', 'BredController@update')->name('breds.update')->middleware('auth');
Route::delete('/saillies', 'BredController@destroy')->name('breds.destroy')->middleware('auth');

/**
 * Achats
 */
Route::get('/commandes', 'CommandController@index')->name('commands.index');
Route::get('/commandes/{id}/show', 'CommandController@show')->name('commands.show');
Route::get('/commandes/create', 'CommandController@create')->name('commands.create')->middleware('auth');
Route::get('/commandes/{id}/edit', 'CommandController@edit')->name('commands.edit')->middleware('auth');
Route::post('/commandes', 'CommandController@store')->name('commands.store')->middleware('auth');
Route::put('/commandes/{id}', 'CommandController@update')->name('commands.update')->middleware('auth');
Route::delete('/commandes', 'CommandController@destroy')->name('commands.destroy')->middleware('auth');

/**
 * Administration: Roles
 */
Route::get('/admin/roles', 'RoleController@index')->name('roles.index')->middleware('auth');
Route::get('/admin/roles/{id}/show', 'RoleController@show')->name('roles.show')->middleware('auth');
Route::get('/admin/roles/create', 'RoleController@create')->name('roles.create')->middleware('auth');
Route::get('/admin/roles/{id}/edit', 'RoleController@edit')->name('roles.edit')->middleware('auth');
Route::post('/admin/roles', 'RoleController@store')->name('roles.store')->middleware('auth');
Route::put('/admin/roles/{id}', 'RoleController@update')->name('roles.update')->middleware('auth');
Route::delete('/admin/roles', 'RoleController@destroy')->name('roles.destroy')->middleware('auth');

/**
 * Administration: Users
 */
Route::get('/admin', 'UserController@index')->name('users.index')->middleware('auth');
Route::get('/admin/{id}/show', 'UserController@show')->name('users.show')->middleware('auth');
Route::get('/admin/{id}/edit', 'UserController@edit')->name('users.edit')->middleware('auth');
Route::put('/admin/{id}', 'UserController@update')->name('users.update')->middleware('auth');
Route::delete('/admin', 'UserController@destroy')->name('users.destroy')->middleware('auth');

Auth::routes();

Route::get('/connexion', 'HomeController@index')->name('connexion'); // Page de connexion
Route::view('/home', 'welcome')->name('home'); // Page d'accueil
