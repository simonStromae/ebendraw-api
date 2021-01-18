<?php

use Illuminate\Support\Facades\Auth;
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

//Route::redirect('/', '/home');

Route::get('/dashboard', function(){
    return view('welcome');
});

Route::resource('roles', 'RoleController');
Route::resource('users', 'UserController');
Route::resource('tags', 'TagController');
Route::resource('illustrations', 'IllustrationController');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
