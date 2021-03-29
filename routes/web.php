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
Route::view('/','accueil');
Route::view('/home','accueil');
Route::view('/accueil','accueil');
Route::view('/stage', 'stage')->name('stage');
Route::post('/stage', 'App\Http\Controllers\StageController@postForm')->name('stage.send');
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
Route::get('/user/list', "App\Http\Controllers\UserController@index")->name('user.list');
Route::get('/user/{id}/edit',"App\Http\Controllers\UserController@show")->name('user.edit');
Route::put('/user/{id}/edit', "App\Http\Controllers\UserController@update")->name('user.update');

Route::get('facture','App\Http\Controllers\FactureController@index')->name('facture');
Route::get('facture/add','App\Http\Controllers\FactureController@add');
Route::post('facture/add','App\Http\Controllers\FactureController@create')->name('facture.add');
Route::get('facture/{id}/edit', 'App\Http\Controllers\FactureController@show')->name('facture.show');
Route::put('facture/{id}/edit','App\Http\Controllers\FactureController@edit')->name('facture.edit');

Route::get('facture/{id}/prestation','App\Http\Controllers\PrestationController@index');
Route::post('facture/{id}/prestation','App\Http\Controllers\PrestationController@create')->name('prestation.add');
Route::get('facture/{id}/pdf', 'App\Http\Controllers\PrestationController@createPDF');
Route::delete('facture/{id}/delete/p','App\Http\Controllers\PrestationController@destroy')->name('prestation.delete');
Route::delete('facture/{id}/delete','App\Http\Controllers\FactureController@destroy')->name('facture.delete');

Route::get('centre', 'App\Http\Controllers\CentreController@index')->name('centre.list');
Route::post('centre', 'App\Http\Controllers\CentreController@store')->name('centre.store');
Route::delete('centre/{id}/delete', 'App\Http\Controllers\CentreController@destroy')->name('centre.delete');

Route::view('pdf','pdf');
