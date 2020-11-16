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
route::get('/kategori/{id}','WelcomeController@kategori');
route::get('/tampilblog/{id}','WelcomeController@tampilblog');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
   

//produk
Route::get('/product','ProductController@index')->name('produk');
Route::post('/product/add','ProductController@createData')->middleware('auth');
Route::get('/product','ProductController@index')->middleware('auth');
Route::get('/product/create','ProductController@create')->name('create-product')->middleware('auth');
Route::patch('/product/update/{id}','ProductController@update');
Route::delete('/product/delete/{id}','ProductController@delete')->name('delete-product')->middleware('auth');



//Category
Route::get('/category','CategoryController@index');
Route::post('/category/add','CategoryController@category')->middleware('auth');
Route::patch('/category/update/{id}','CategoryController@update');
Route::delete('/category/delete/{id}','CategoryController@cdelete')->name('delete-categori')->middleware('auth');

//jadwal
Route::get('/jadwal','ProductController@jadwal')->middleware('auth');
 
//Reseller
Route::get('/reseller','ResellerController@index');
Route::get('/reseller/detail/{id}','ResellerController@detail');

Route::get('/reseller/blog','ResellerController@blog')->name('blog');
Route::get('/users/kontak','ResellerController@kontak')->name('kontak');
Route::get('/users/pusatbantuan','ResellerController@pusatbantuan')->name('pusatbantuan');
route::get('/reseller/category/{id}','ResellerController@category');
route::get('/reseller/kategori/{id}','WelcomeController@kategori');
Route::get('/reseller/cart','ResellerController@cart');
route::post('/reseller/cart/store','ResellerController@store');
Route::delete('/reseller/cart/remove/{id}','ResellerController@removecart' );
route::patch('/reseller/cart/update/{id}','ResellerController@update');

 

// Users
Route::get('/profil/{id}','UserController@profil')->name('profil.admin');
Route::get('/user','UserController@index')->name('user')->middleware('auth');
Route::patch('/admin/user/update/{id}','UserController@update');
Route::delete('/user/delete/{id}','UserController@delete')->name('delete-user')->middleware('auth');
Route::get('/daftaradmin','UserController@admin')->middleware('auth');
Route::patch('/admin/update/{id}','UserController@updateUser');
Route::post('/admin/add','UserController@createAdmin');
Route::get('/daftarreseller','UserController@reseller')->middleware('auth');
Route::patch('/daftarreseller/update/{id}','UserController@update');
Route::post('/reseller/add','UserController@create');
Route::get('/admin/kategoriartikel','UserController@kategoriartikel')->middleware('auth');
Route::post('/admin/tambahKartikel','UserController@tambahKategori')->middleware('auth');
Route::get('/admin/Tartikel','UserController@tag')->middleware('auth');
Route::post('/admin/tambahTartikel','UserController@tambahTag')->middleware('auth');
Route::get('/admin/artikel','UserController@artikel')->middleware('auth');
Route::post('/admin/tambahartikel','UserController@tambahArtikel')->middleware('auth');
Route::get('/admin/tambartikel','UserController@tambartikel')->middleware('auth');
Route::get('/admin/artikel/{id}','UserController@perbaruiKategori')->middleware('auth');
Route::patch('/artikel/update/{id}','UserController@updateartikel');




//Userbiasa
Route::get('/users','UserbiasaController@index');
Route::get('/detail/{id}','UserbiasaController@detail');
Route::get('/users/blog','UserbiasaController@blog')->name('blog');
Route::get('/users/kontak','UserbiasaController@kontak')->name('kontak');
Route::get('/users/pusatbantuan','UserbiasaController@pusatbantuan')->name('pusatbantuan');
route::get('/category/{id}','UserbiasaController@category');
route::get('/users/kategori/{id}','WelcomeController@kategori');
Route::get('/cart','UserbiasaController@cart');
route::post('/cart/store','UserbiasaController@store');
Route::delete('/cart/remove/{id}','UserbiasaController@removecart' );
route::patch('/cart/update/{id}','UserbiasaController@updatecart');