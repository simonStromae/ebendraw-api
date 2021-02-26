<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('header.api')->namespace('API')->prefix("illustrations")->group(function (){

    Route::get('/inRandom/{number?}', 'IllustrationController@inRandom');
    Route::get('/search/{value?}', 'IllustrationController@resultSearch');

});

Route::middleware('header.api')->namespace('API')->prefix("user")->group(function (){

    Route::post('/update/{id}', 'UserController@updateUser');
    Route::post('/login', 'UserController@loginUser');
    Route::post('/register', 'UserController@registerUser');

    Route::middleware('auth:api')->group(function () {
        // auth from API via passport
        Route::get('/', 'UserController@details');

    });

//    Route::get('/{value?}', 'IllustrationController@resultSearch');

//    Route::redirect('/svg/', '/svg/nkd.svg');

});
