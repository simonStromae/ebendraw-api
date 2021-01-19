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

Route::redirect('/', '/login');


Route::middleware("auth")->group(function (){
    Route::get('/dashboard', function(){
        return view('welcome');
    })->name('dashboard');

    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('tags', 'TagController');
    Route::resource('illustrations', 'IllustrationController');

    Route::get('my-illustrations', function (){
       return view('auth.my_illustrations');
    })->name('my_illustrations');

    Route::get('my-profile', function (){
        return view('auth.my_profile');
    })->name('my_profile');
});
Auth::routes(['register' => false]);
/*Route::get('/test', function (){
    return \Illuminate\Support\Facades\Hash::make('password');
});*/
Route::get('/home', 'HomeController@index')->name('home');
