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
    Route::get('login', 'Dashboard\AuthController@getLogin')->name('dashboard.login.get');
    Route::post('login', 'Dashboard\AuthController@login')->name('dashboard.login');

    Route::group(['namespace'=>'Dashboard', 'middleware'=>'auth:admin'], function () {
        Route::post('logout', 'AuthController@logout')->name('dashboard.logout');

        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::resources([
            'categories'            => CategoryController::class,
            'courses'               => CourseController::class,
//            'users'=>UsersController::class,
        ]);
        Route::get('/courses/trashed/show', 'CourseController@trashed')->name('courses.trashed');

    });
