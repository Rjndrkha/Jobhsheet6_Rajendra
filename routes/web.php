<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Auth;

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
  return view('index');
});
Route::get('/about', function () {
  return view('about');
});
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');
Route::get('/contact', function () {
  return view('contact');
});
Route::get('/gallery', function () {
  return view('gallery');
});
Route::get('/dinning', function () {
  return view('dinning');
});
Route::get('/news', function () {
  return view('news');
});

Route::get('/news', function () {
  return view('news');
});
Route::get('/login', function () {
  return view('login');
});
Route::get('/home', function () {
  return view('home');
});

/*
Route::get('/login', function () {
  return view('login');
});

Route::get('/register', function () {
  return view('register');
});
*/
 Auth::routes();