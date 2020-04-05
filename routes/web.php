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
Route::get('/', function () {

    return redirect()->route('index.index');
});
    Route::get('logout',[ 'as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
// Auth::routes();
    Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@getlogin']);
    Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@postlogin']);
    Route::post('store',[ 'as' => 'store', 'uses' =>  'Auth\RegisterController@store']);
    Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@getRegister']);
    Route::group(['prefix' => 'admin'], function () {
        Route::resource('blog', 'admin\BlogController');
        Route::resource('user', 'admin\UserController');
        Route::resource('products', 'admin\ProductController');
        Route::resource('giaovien', 'admin\TeacherController');

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

