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

Route::view('/','accueil');
Route::view('/accueil','accueil');
Route::view('/stage', 'stage')->name('stage')->middleware('admin');
Route::post('/stage', 'App\Http\Controllers\StageController@postForm')->name('stage.send')->middleware('admin');
Route::post('/contact', 'App\Http\Controllers\ContactController@postForm')->name('contact');
Route::post('/sendemail', 'App\Http\Controllers\SendEmailController@send')->name('sendemail');
Route::view('testmail', 'testmail');
Route::get('lang/home', 'App\Http\Controllers\LangController@index');
Route::get('lang/change', 'App\Http\Controllers\LangController@change')->name('changeLang');
Route::view('atelier','atelier')->name('atelier');
Route::view('membre','membre.membre');
Route::get('membre/professionnel', 'App\Http\Controllers\MembreController@professionnelGet');
Route::get('membre/particulier', 'App\Http\Controllers\MembreController@membreGet');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout', function () {
    return abort(404);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/list', "App\Http\Controllers\UserController@index")->name('user.list')->middleware('auth');
Route::get('/user/{id}/edit',"App\Http\Controllers\UserController@show")->name('user.edit')->middleware('auth');
Route::put('/user/{id}/edit', "App\Http\Controllers\UserController@update")->name('user.update')->middleware('auth');
Route::delete('/user/{id}/delete', "App\Http\Controllers\UserController@destroy")->name('user.delete')->middleware('auth');
Route::get('/user/add', "App\Http\Controllers\UserController@create")->name('user.add')->middleware('auth');
Route::post('/user/add', "App\Http\Controllers\UserController@store")->name('user.store')->middleware('auth');
Route::get('/user/{id}/edit/password', "App\Http\Controllers\UserController@editPassword")->name('user.edit.password')->middleware('auth');
Route::put('/user/{id}/edit/password',"App\Http\Controllers\UserController@storePassword")->name('change.password')->middleware('auth');

Route::get('facture','App\Http\Controllers\FactureController@index')->name('facture')->middleware('auth');
Route::get('facture/add','App\Http\Controllers\FactureController@add')->middleware('auth');
Route::post('facture/add','App\Http\Controllers\FactureController@create')->name('facture.add')->middleware('auth');
Route::get('facture/{id}/edit', 'App\Http\Controllers\FactureController@show')->name('facture.show')->middleware('auth');
Route::put('facture/{id}/edit','App\Http\Controllers\FactureController@edit')->name('facture.edit')->middleware('auth');

Route::get('facture/{id}/prestation','App\Http\Controllers\PrestationController@index')->middleware('auth');
Route::post('facture/{id}/prestation','App\Http\Controllers\PrestationController@create')->name('prestation.add')->middleware('auth');
Route::get('facture/{id}/pdf', 'App\Http\Controllers\PrestationController@createPDF')->middleware('auth');
Route::delete('facture/{id}/delete/p','App\Http\Controllers\PrestationController@destroy')->name('prestation.delete')->middleware('auth');
Route::delete('facture/{id}/delete','App\Http\Controllers\FactureController@destroy')->name('facture.delete')->middleware('auth');

Route::get('centre', 'App\Http\Controllers\CentreController@index')->name('centre.list')->middleware('auth');
Route::post('centre', 'App\Http\Controllers\CentreController@store')->name('centre.store')->middleware('auth');
Route::delete('centre/{id}/delete', 'App\Http\Controllers\CentreController@destroy')->name('centre.delete')->middleware('auth');
