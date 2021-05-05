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

Route::get('/','App\Http\Controllers\ViewController@accueil');
Route::view('/stage', 'stage')->name('stage');
Route::post('/stage', 'App\Http\Controllers\StageController@postForm')->name('stage.send');
Route::post('/contact', 'App\Http\Controllers\ContactController@postForm')->name('contact');
Route::post('/sendemail', 'App\Http\Controllers\SendEmailController@send')->name('sendemail');
Route::view('testmail', 'testmail');
Route::get('lang/home', 'App\Http\Controllers\LangController@index');
Route::get('lang/change', 'App\Http\Controllers\LangController@change')->name('changeLang');
Route::view('atelier','atelier')->name('atelier');

Route::view('membre','membre.membre');
Route::post('/membre', 'App\Http\Controllers\MembreController@postForm')->name('membre.send');

Route::get('membre/professionnel', 'App\Http\Controllers\MembreController@professionnelGet');
Route::post('membre/professionnel', 'App\Http\Controllers\MembreController@professionnelPost')->name('professionnel.send');

Route::get('membre/particulier', 'App\Http\Controllers\MembreController@particulierGet');
Route::post('membre/particulier', 'App\Http\Controllers\MembreController@particulierPost')->name('particulier.send');

Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout', function () {
    return abort(404);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/list', "App\Http\Controllers\UserController@index")->name('user.list')->middleware('auth','admin');
Route::get('/user/{id}/edit',"App\Http\Controllers\UserController@show")->name('user.edit')->middleware('auth','admin');
Route::put('/user/{id}/edit', "App\Http\Controllers\UserController@update")->name('user.update')->middleware('auth','admin');
Route::delete('/user/{id}/delete', "App\Http\Controllers\UserController@destroy")->name('user.delete')->middleware('auth','admin');
Route::get('/user/add', "App\Http\Controllers\UserController@create")->name('user.add')->middleware('auth','admin');
Route::post('/user/add', "App\Http\Controllers\UserController@store")->name('user.store')->middleware('auth','admin');
Route::get('/user/{id}/edit/password', "App\Http\Controllers\UserController@editPassword")->name('user.edit.password')->middleware('auth','admin');
Route::put('/user/{id}/edit/password',"App\Http\Controllers\UserController@storePassword")->name('change.password')->middleware('auth','admin');
Route::get('/user/role', 'App\Http\Controllers\UserController@role');
Route::put('/user/{id}/role', 'App\Http\Controllers\UserController@changeRole')->name('role.add');

Route::get('facture','App\Http\Controllers\FactureController@index')->name('facture')->middleware('auth','secretaire');
Route::get('facture/add','App\Http\Controllers\FactureController@add')->middleware('auth','secretaire');
Route::post('facture/add','App\Http\Controllers\FactureController@create')->name('facture.add')->middleware('auth','secretaire');
Route::get('facture/{id}/edit', 'App\Http\Controllers\FactureController@show')->name('facture.show')->middleware('auth','secretaire');
Route::put('facture/{id}/edit','App\Http\Controllers\FactureController@edit')->name('facture.edit')->middleware('auth','secretaire');

Route::get('facture/{id}/prestation','App\Http\Controllers\PrestationController@index')->middleware('auth','secretaire');
Route::post('facture/{id}/prestation','App\Http\Controllers\PrestationController@create')->name('prestation.add')->middleware('auth','secretaire');
Route::get('facture/{id}/pdf', 'App\Http\Controllers\PrestationController@createPDF')->middleware('auth','secretaire');
Route::delete('facture/{id}/delete/p','App\Http\Controllers\PrestationController@destroy')->name('prestation.delete')->middleware('auth','secretaire');
Route::delete('facture/{id}/delete','App\Http\Controllers\FactureController@destroy')->name('facture.delete')->middleware('auth','secretaire');
Route::delete('facture/{id}/delete/all','App\Http\Controllers\PrestationController@destroyAll')->name('p')->middleware('auth','secretaire');

Route::get('centre', 'App\Http\Controllers\CentreController@index')->name('centre.list')->middleware('auth','secretaire');
Route::post('centre', 'App\Http\Controllers\CentreController@store')->name('centre.store')->middleware('auth','secretaire');
Route::delete('centre/{id}/delete', 'App\Http\Controllers\CentreController@destroy')->name('centre.delete')->middleware('auth','secretaire');

Route::get('article', 'App\Http\Controllers\ArticleController@index')->name('article');
Route::get('article-show/{id}', 'App\Http\Controllers\ArticleController@show')->name('article.show');
Route::get('article/add','App\Http\Controllers\ArticleController@create')->name('article.add')->middleware('auth','secretaire');
Route::post('article/add', 'App\Http\Controllers\ArticleController@store')->name('article.store')->middleware('auth','secretaire');
Route::get('article-list','App\Http\Controllers\ArticleController@list')->name('article.list')->middleware('auth','secretaire');
Route::get('article/{id}/edit','App\Http\Controllers\ArticleController@edit')->name('article.edit')->middleware('auth','secretaire');
Route::put('article/{id}/edit','App\Http\Controllers\ArticleController@update')->name('article.update')->middleware('auth','secretaire');
Route::delete('article/{id}/delete','App\Http\Controllers\ArticleController@destroy')->name('article.delete')->middleware('auth','secretaire');

Route::get('generate-pdf','App\Http\Controllers\PrestationController@pdf');

Route::get('psy','App\Http\Controllers\PsyController@index')->middleware('auth','secretaire');
Route::post('psy/add', 'App\Http\Controllers\PsyController@store')->name('psy.add')->middleware('auth','secretaire');
Route::get('psy/{id}/edit','App\Http\Controllers\PsyController@edit')->name('psy.edit')->middleware('auth','secretaire');
Route::put('psy/{id}/edit','App\Http\Controllers\PsyController@update')->name('psy.update')->middleware('auth','secretaire');
Route::delete('psy/{id}/delete', 'App\Http\Controllers\PsyController@destroy')->name('psy.destroy')->middleware('auth','secretaire');

Route::get('/album', array('as' => 'index','uses' => 'App\Http\Controllers\AlbumsController@getList'));
Route::get('/createalbum','App\Http\Controllers\AlbumsController@getForm')->name('album.create');
Route::post('/createalbum','App\Http\Controllers\AlbumsController@postCreate')->name('album.add');
Route::get('/deletealbum/{id}','App\Http\Controllers\AlbumsController@getDelete');
Route::get('/album/{id}', array('as' => 'show_album','uses' => 'App\Http\Controllers\AlbumsController@getAlbum'));

Route::get('image-gallery', 'App\Http\Controllers\GalleryController@index');
Route::post('image-gallery', 'App\Http\Controllers\GalleryController@upload');
Route::delete('image-gallery/{id}', 'App\Http\Controllers\GalleryController@destroy');
