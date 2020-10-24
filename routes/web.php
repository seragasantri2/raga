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
Route::get('/Blog','WelcomeController@blog')->name('blog');
Route::get('/Kontak','WelcomeController@kontak')->name('kontak');
Route::get('/pusatbantuan','WelcomeController@pusatbantuan')->name('pusatbantuan');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
   

//produk
Route::get('/product','ProductController@index')->name('produk');
Route::post('/product/add','ProductController@createData')->middleware('auth');
Route::get('/product','ProductController@index')->middleware('auth');
Route::get('/product/create','ProductController@create')->name('create-product')->middleware('auth');
Route::delete('/product/delete/{id}','ProductController@delete')->name('delete-product')->middleware('auth');

//jadwal
Route::get('/jadwal','ProductController@jadwal')->middleware('auth');

//Reseller
Route::get('/reseller','ResellerController@index');

// Users
Route::get('/user','UserController@index')->name('user')->middleware('auth');
Route::get('/daftaradmin','UserController@admin')->middleware('auth');
Route::get('/daftarreseller','UserController@reseller')->middleware('auth');
Route::get('/artikel','UserController@artikel')->middleware('auth');



//Userbiasa
Route::get('/users','UserbiasaController@index');
Route::get('/detail/{id}','UserbiasaController@detail');