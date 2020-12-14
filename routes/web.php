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

Route::group(['prefix' => 'ouchi', 'middleware' => 'auth'], function (){
    Route::get('index', 'OuchiController@index')->name('ouchi.index');
    Route::get('create', 'OuchiController@create')->name('ouchi.create');
    Route::post('store', 'OuchiController@store')->name('ouchi.store');
    Route::get('show/{id}', 'OuchiController@show')->name('ouchi.show');
    Route::get('edit/{id}', 'OuchiController@edit')->name('ouchi.edit');
    Route::post('update/{id}', 'OuchiController@update')->name('ouchi.update');
    Route::post('destroy/{id}', 'OuchiController@destroy')->name('ouchi.destroy');
});



//Route::group(['prefix' => 'note', 'middleware' => 'auth'], function (){
//    Route::get('index', 'NoteFormController@index')->name('note.index');
//    Route::get('create', 'NoteFormController@create')->name('note.create');
//    Route::post('store', 'NoteFormController@store')->name('note.store');
////    Route::get('show/{id}', 'NoteFormController@show')->name('note.show');
////    Route::get('edit/{id}', 'NoteFormController@edit')->name('note.edit');
////    Route::post('update/{id}', 'NoteFormController@update')->name('note.update');
////    Route::post('destroy/{id}', 'NoteFormController@destroy')->name('note.destroy');
//});

//Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function (){
//    Route::get('index', 'ContactFormController@index')->name('contact.index');
//    Route::get('create', 'ContactFormController@create')->name('contact.create');
//    Route::post('store', 'ContactFormController@store')->name('contact.store');
//    Route::get('show/{id}', 'ContactFormController@show')->name('contact.show');
//    Route::get('edit/{id}', 'ContactFormController@edit')->name('contact.edit');
//    Route::post('update/{id}', 'ContactFormController@update')->name('contact.update');
//    Route::post('destroy/{id}', 'ContactFormController@destroy')->name('contact.destroy');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
