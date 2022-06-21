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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
  return view('home');    
})->name('home');;

Route::get('/about', function(){
  return view('about');    
})->name('about');;

Route::get('/contact', function(){
  return view('contact');    
})->name('contact');

// ===== get ===== //
Route::get('/contact/all/{id}',
 'App\Http\Controllers\ContactController@showOneMessage'
)->name('contact-data-one');

Route::get('/contact/all/{id}/update',
 'App\Http\Controllers\ContactController@updateMessage'
)->name('contact-update');

Route::get('/contact/all',
 'App\Http\Controllers\ContactController@allData'
)->name('contact-data');

Route::get('/contact/all/{id}/delete',
 'App\Http\Controllers\ContactController@deleteMessage'
)->name('contact-delete');

// ===== post ===== //
Route::post('/contact/submit',
 'App\Http\Controllers\ContactController@submit'
)->name('contact-form');

Route::post('/contact/all/{id}/update',
 'App\Http\Controllers\ContactController@updateMessageSubmit'
)->name('contact-update-submit');


