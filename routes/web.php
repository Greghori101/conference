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
Route::get('/conferences','App\Http\Controllers\ConferenceController@index')->name('conferences');

Route::post('/conferences/store','App\Http\Controllers\ConferenceController@store')->name('store');
Route::get('/conferences/show/{slug}','App\Http\Controllers\ConferenceController@show')->name('conference.show');
Route::get('/conferences/{id}','App\Http\Controllers\ConferenceController@edit')->name('conference.edit');
Route::post('/conferences/update/{id}','App\Http\Controllers\ConferenceController@update')->name('conference.update');
Route::get('/conferences/destroy/{id}','App\Http\Controllers\ConferenceController@destroy')->name('conference.destroy');

Route::get('/conference/create','App\Http\Controllers\ConferenceController@create')->name('conference.create');
Route::get('/search','App\Http\Controllers\ConferenceController@search')->name('conference.search');

Route::get('/conference/depot', function () {
    return view('conference.depot');
});

Route::get('/articles/create', function () {
    return view('articles.create');
});

