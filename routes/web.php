<?php

use Illuminate\Support\Facades\Route;
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
Route::group(['prefix' => '/'], function () {
    // Route::resource('raovat', 'index\RaovatController');
    Route::resource('index', 'index\IndexController');
    Route::resource('admin', 'index\UserController');
    Route::get('admin.reset', ['as' => 'admin.reset', 'uses' => 'index\UserController@Reset']);
    Route::get('admin.register', ['as' => 'admin.register', 'uses' => 'index\UserController@Register']);
    Route::resource('review', 'index\ReviewController');
    Route::resource('ad', 'index\AdController');
    Route::resource('document', 'index\DocumentController');
    Route::resource('teacher', 'index\TeacherController');
    //Route::resource('review.edit', ['as' => 'review.edit', 'uses' => 'index\ReviewController@edit']);
});
Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
Route::group(['prefix' => 'index'], function () {
    Route::resource('index', 'index\IndexController');
    Route::resource('admin', 'index\UserController');
    Route::get('admin.reset', ['as' => 'admin.reset', 'uses' => 'index\UserController@Reset']);
    Route::get('admin.register', ['as' => 'admin.register', 'uses' => 'index\UserController@Register']);
    Route::resource('review', 'index\ReviewController');
    Route::resource('ad', 'index\AdController');
    Route::resource('document', 'index\DocumentController');
    Route::resource('teacher', 'index\TeacherController');
    Route::resource('contact', 'index\ContactController');
    Route::post('contact.testEmail', ['as' => 'contact.testEmail', 'uses' => 'index\ContactController@testEmail']);
    //Route::resource('review.edit', ['as' => 'review.edit', 'uses' => 'index\ReviewController@edit']);
});

