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

Route::get('/', 'WelcomeController@index');
Route::get('/produk/{id}','WelcomeController@category');
Route::post('/createblog','WelcomeController@create');
Route::get('/blog','WelcomeController@blog')->name('blog');
Route::get('/kontak','WelcomeController@kontak')->name('kontak');
Route::get('/pusatbantuan','WelcomeController@pusatbantuan')->name('pusatbantuan');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
   

//produk
Route::get('/product','ProductController@index')->name('produk');
Route::post('/product/add','ProductController@createData')->middleware('auth');
Route::get('/product','ProductController@index')->middleware('auth');
Route::get('/product/create','ProductController@create')->name('create-product')->middleware('auth');
Route::delete('/product/delete/{id}','ProductController@delete')->name('delete-product')->middleware('auth');



//Category
Route::get('/category','CategoryController@index');
Route::post('/category/add','CategoryController@category')->middleware('auth');
Route::delete('/category/delete/{id}','CategoryController@cdelete')->name('delete-categori')->middleware('auth');

//jadwal
Route::get('/jadwal','ProductController@jadwal')->middleware('auth');

//Reseller
Route::get('/reseller','ResellerController@index');


// Users
Route::get('/user','UserController@index')->name('user')->middleware('auth');
Route::delete('/user/delete/{id}','UserController@delete')->name('delete-user')->middleware('auth');
Route::get('/daftaradmin','UserController@admin')->middleware('auth');
Route::post('/admin/add','UserController@createAdmin');
Route::get('/daftarreseller','UserController@reseller')->middleware('auth');
Route::get('/artikel','UserController@artikel')->middleware('auth');
Route::post('/reseller/add','UserController@create');



//Userbiasa
Route::get('/users','UserbiasaController@index');
Route::get('/detail/{id}','UserbiasaController@detail');
Route::get('/users/blog','UserbiasaController@blog')->name('blog');
Route::get('/users/kontak','UserbiasaController@kontak')->name('kontak');
Route::get('/users/pusatbantuan','UserbiasaController@pusatbantuan')->name('pusatbantuan');
route::get('/category/{id}','UserbiasaController@category');