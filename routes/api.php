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

    Route::group( ['middleware'=>'api', 'namespace'=>'Api'], function ($request) {
        Route::group(['prefix'=>'auth'], function ($request){
            Route::post('login', 'AuthController@login');
            Route::post('register', 'AuthController@register');

            Route::group(['middleware'=>['jwt.verify']], function ($router) {
                Route::post('logout', 'AuthController@logout');
                Route::post('refresh', 'AuthController@refresh');
            });
        });
        Route::group(['middleware'=>['jwt.verify'], 'prefix'=>'categories'], function ($router) {
            Route::get('/', 'AppController@categories');
            Route::get('/{category}/courses', 'AppController@coursesInCategory');
        });
        Route::group(['middleware'=>['jwt.verify'], 'prefix'=>'courses'], function ($router) {
            Route::get('filtration', 'AppController@filterCourses');
            Route::get('', 'AppController@courses');
            Route::get('{course}', 'AppController@course');
        });
    });
