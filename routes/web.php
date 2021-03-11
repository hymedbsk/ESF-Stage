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
Route::post('/user/{id}/password', 'App\Http\Controllers\UserController@password')->name('change.password');
