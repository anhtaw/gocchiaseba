<?php

use App\model\admin\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
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

Auth::routes();
Route::get('/', function () {

    return redirect()->route('index.index');
});
    Route::get('logout',[ 'as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
    Route::get('admin', ['as' => 'admin', 'uses' => 'Auth\LoginController@getlogin1']);
    Route::post('admin', ['as' => 'admin', 'uses' => 'Auth\LoginController@postlogin']);
    Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@getlogin']);
    Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@postlogin']);
    Route::post('store',[ 'as' => 'store', 'uses' =>  'Auth\RegisterController@store']);
    Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@getRegister']);
Route::get('admin.register', ['as' => 'admin.register', 'uses' => 'Auth\RegisterController@showUserRegisterForm']);
// Route::post('admin.logout', ['as' => 'admin.logout', 'uses' => 'Admin1\LoginController@logout']);
Route::get('admin.logout',[ 'as' => 'admin.logout', 'uses' => 'Auth\LoginController@logout']);
 Route::get('acounts-logout',[ 'as' => 'acounts-logout', 'uses' => 'Auth\LoginController@log']);
    Route::group(['prefix' => 'admin'], function () {
        Route::resource('blog', 'admin\BlogController');
        Route::resource('user', 'admin\UserController');
    Route::get('detail', ['as' => 'detail', 'uses' => 'admin\UserController@indexdetail']);
    Route::put('updatedetail', ['as' => 'updatedetail', 'uses' => 'admin\UserController@updatedetail']);
        Route::resource('products', 'admin\ProductController');
        Route::resource('giaovien', 'admin\TeacherController');
    Route::resource('products_category', 'admin\Products_categoryController');

    });
Route::resource('post', 'PostController');
Route::resource('comments', 'CommentController');
 Route::get('post.create', ['as'=>'post.create','uses'=>'PostController@create']);
    Route::post('/post/store', ['as'=>'post.store','uses'=>'PostController@store']);
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
    Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
Route::get('admin.register', ['as' => 'admin.register', 'uses' => 'index\UserController@Register']);
    Route::group(['prefix' => 'index'], function () {
        Route::resource('index', 'index\IndexController');
        Route::resource('admin', 'index\UserController');
        Route::get('admin.reset', ['as' => 'admin.reset', 'uses' => 'index\UserController@Reset']);

        Route::resource('review', 'index\ReviewController');
        Route::resource('ad', 'index\AdController');
    Route::resource('detail', 'index\DetailController');
        Route::resource('document', 'index\DocumentController');
        Route::resource('teacher', 'index\TeacherController');
        Route::resource('contact', 'index\ContactController');
        Route::post('contact.testEmail', ['as' => 'contact.testEmail', 'uses' => 'index\ContactController@testEmail']);
    Route::get('giaotrinh', ['as' => 'giaotrinh', 'uses' => 'index\AdController@getgiaotrinh']);
    Route::get('dodung', ['as' => 'dodung', 'uses' => 'index\AdController@getdodung']);
    Route::get('doan', ['as' => 'doan', 'uses' => 'index\AdController@getdoan']);
    Route::get('dodungcanhan', ['as' => 'dodungcanhan', 'uses' => 'index\AdController@getdodungcanhan']);
    Route::get('quanao', ['as' => 'quanao', 'uses' => 'index\AdController@getquanao']);
    Route::post('timkiem', ['as' => 'timkiem', 'uses' => 'index\AdController@gettimkiem']);
    Route::get('chitiet/{id}', ['as' => 'chitiet', 'uses' => 'index\AdController@getchitiet']);

    //Route::resource('review.edit', ['as' => 'review.edit', 'uses' => 'index\ReviewController@edit']);
});
    Route::get('image/upload',['as'=>'upload.create','uses'=>'ImageUploadController@fileCreate']);
    Route::post('image/upload/store','ImageUploadController@fileStore');
    Route::post('image/delete','ImageUploadController@fileDestroy');
