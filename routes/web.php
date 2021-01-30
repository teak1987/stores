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


//Front Page
Route::get('/','App\Http\Controllers\Front\PublicController@index')->name('public.index');
Route::get('/login','App\Http\Controllers\Front\LoginController@login')->name('public.login');
Route::post('/loginIn','App\Http\Controllers\Front\LoginController@loginIn')->name('loginIn');
Route::get('/register','App\Http\Controllers\Front\LoginController@register')->name('public.register');
Route::post('/registerIn','App\Http\Controllers\Front\LoginController@registerIn')->name('registerIn');

Route::get('/logout','App\Http\Controllers\Front\LoginController@logout')->name('logout');


//Admin
Route::group(['middleware'=>['auth'=>'admin']],function() {
    //Dashboard
    Route::get('/admin','App\Http\Controllers\Admin\DashboardController@dashboard')->name('admin.dashboard');

    //Users
    Route::get('/admin/user','App\Http\Controllers\Admin\UserController@index')->name('admin.user.index');

    //Products
    Route::get('/admin/product/index','App\Http\Controllers\Admin\ProductController@index')->name('admin.product.index');
    Route::get('/admin/product/create','App\Http\Controllers\Admin\ProductController@create')->name('admin.product.create');
    Route::get('/admin/product/edit/{id}','App\Http\Controllers\Admin\ProductController@edit')->name('admin.product.edit');
    Route::post('/admin/product/update/{id}','App\Http\Controllers\Admin\ProductController@update')->name('admin.product.update');
//    if(property_exists('slug','=',$product->slug)){
        Route::get('/admin/product/show/{slug}','App\Http\Controllers\Admin\ProductController@show')->name('admin.product.show');

//    }else{
//        Route::get('/admin/product/show/{id}','App\Http\Controllers\Admin\ProductController@showProduct')->name('admin.product.show');
//    }
    Route::post('/admin/product/store','App\Http\Controllers\Admin\ProductController@store')->name('admin.product.store');
    Route::post('/admin/product/delete/{id}','App\Http\Controllers\Admin\ProductController@delete')->name('admin.product.delete');

    //Stores
    Route::get('/admin/store/index','App\Http\Controllers\Admin\StoreController@index')->name('admin.store.index');
    Route::get('/admin/store/create','App\Http\Controllers\Admin\StoreController@create')->name('admin.store.create');
    Route::get('/admin/store/edit/{id}','App\Http\Controllers\Admin\StoreController@edit')->name('admin.store.edit');
    Route::post('/admin/store/store','App\Http\Controllers\Admin\StoreController@store')->name('admin.store.store');
    Route::get('/admin/store/show/{base_url}','App\Http\Controllers\Admin\StoreController@show')->name('admin.store.show');
    Route::post('/admin/store/update/{id}','App\Http\Controllers\Admin\StoreController@update')->name('admin.store.update');
    Route::post('/admin/store/delete/{id}','App\Http\Controllers\Admin\StoreController@delete')->name('admin.store.delete');



});
