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
    Route::post('testEmail', 'Controller@testEmail');
    Route::get('testEmail', 'Controller@testEmail');
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
    Route::get('detail', ['as' => 'detail', 'uses' => 'admin\UserController@indexdetail']);
    Route::put('updatedetail', ['as' => 'updatedetail', 'uses' => 'admin\UserController@updatedetail']);
        Route::resource('products', 'admin\ProductController');
        Route::resource('giaovien', 'admin\TeacherController');
    Route::resource('products_category', 'admin\Products_categoryController');

    });
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
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
    Route::get('giaotrinh', ['as' => 'giaotrinh', 'uses' => 'index\AdController@getgiaotrinh']);
    Route::get('dodung', ['as' => 'dodung', 'uses' => 'index\AdController@getdodung']);
    Route::get('doan', ['as' => 'doan', 'uses' => 'index\AdController@getdoan']);
    Route::get('dodungcanhan', ['as' => 'dodungcanhan', 'uses' => 'index\AdController@getdodungcanhan']);
    Route::get('quanao', ['as' => 'quanao', 'uses' => 'index\AdController@getquanao']);
        //Route::resource('review.edit', ['as' => 'review.edit', 'uses' => 'index\ReviewController@edit']);
    });

