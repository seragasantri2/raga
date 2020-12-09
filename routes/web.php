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




//Category

//jadwal

 
//Reseller
Route::group(['middleware' => ['reseller']], function () {
    //
    
    Route::get('/reseller','ResellerController@index')->name('reseller');
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
});


// SuperAdmin
Route::group(['middleware' => ['superadmin']], function () {
    //
    
    Route::get('/home', 'SuperController@dashboard');
    Route::get('/profil/{id}','SuperController@profil')->name('profil.admin');
    Route::get('/user','SuperController@index')->name('user')->middleware('auth');
    Route::patch('/user/update/{id}','SuperController@update');
    Route::delete('/user/delete/{id}','SuperController@delete')->name('delete-user')->middleware('auth');
    Route::get('/daftaradmin','SuperController@admin')->middleware('auth');
    Route::patch('/admin/update/{id}','SuperController@updateUser');
    Route::post('/admin/add','SuperController@createAdmin');
    Route::get('/daftarreseller','SuperController@reseller')->middleware('auth');
    Route::patch('/daftarreseller/update/{id}','superController@update');
    Route::post('/reseller/add','SuperController@create');

    Route::get('/kategoriartikel','SuperController@kategoriartikel')->middleware('auth');
    Route::post('/tambahKartikel','SuperController@tambahKategori')->middleware('auth');
    Route::patch('/updateKartikel/{id}','SuperController@perbaruiKategori')->middleware('auth');
    Route::delete('/deleteKartikel/{id}','SuperController@deletekategori')->middleware('auth');
    Route::get('/Tartikel','SuperController@tag')->middleware('auth');
    Route::post('/tambahTartikel','SuperController@tambahTag')->middleware('auth');
    Route::patch('/Tartikel/update/{id}','SuperController@updatetag')->middleware('auth');
    Route::delete('/Tartikel/delete/{id}','SuperController@deletetag')->middleware('auth');
    Route::get('/artikel','SuperController@artikel')->middleware('auth');
    Route::post('/tambahartikel','SuperController@tambahArtikel')->middleware('auth');
    Route::get('/tambartikel','SuperController@tambartikel')->middleware('auth');
    Route::get('/artikel/{id}','SuperController@perbaruiartikel')->middleware('auth');
    Route::patch('/update/{id}','SuperController@updateartikel');
    Route::delete('/artikel/delete/{id}','SuperController@deleteartikel')->middleware('auth');

    Route::get('/product','SuperController@produk');
    Route::post('/product/add','SuperController@createData');
    Route::get('/product','SuperController@produk');
    Route::get('/product/create','SuperController@createproduk');
    Route::patch('/product/update/{id}','SuperController@updateproduk');
    Route::delete('/product/delete/{id}','SuperController@deleteproduk');

    Route::get('/category','SuperController@indexkategori');
    Route::post('/category/add','SuperController@categoryproduk')->middleware('auth');
    Route::post('/maincategory/add','SuperController@maincategoryproduk')->middleware('auth');
    Route::post('/subcategory/add','SuperController@subcategoryproduk')->middleware('auth');
    Route::patch('/category/update/{id}','SuperController@updatekategoriproduk');
    Route::delete('/category/delete/{id}','SuperController@kategoridelete')->name('deletecategori')->middleware('auth');

    Route::get('/mainkat/{id}','SuperController@mainkat');
    Route::get('/subkat/{id}','SuperController@subkat');

    

    Route::get('/jadwal','SuperController@jadwal');

});

 

// Users
Route::group(['middleware' => ['admin']], function () {
    //
    
    Route::get('/admins', 'UserController@home');
    Route::get('/admin/profil/{id}','UserController@profil')->name('profil.admin');
    Route::get('/admin/user','UserController@index')->name('user')->middleware('auth');
    Route::patch('/admin/user/update/{id}','UserController@update');
    Route::delete('/admin/user/delete/{id}','UserController@delete')->name('delete-user')->middleware('auth');
    Route::get('/admin/daftaradmin','UserController@admin')->middleware('auth');
    Route::patch('/admin/admin/update/{id}','UserController@updateUser');
    Route::post('/admin/admin/add','UserController@createAdmin');
    Route::get('/admin/daftarreseller','UserController@reseller')->middleware('auth');
    Route::patch('/admin/daftarreseller/update/{id}','UserController@update');
    Route::post('/admin/reseller/add','UserController@create');
    Route::get('/admin/kategoriartikel','UserController@kategoriartikel')->middleware('auth');
    Route::post('/admin/tambahKartikel','UserController@tambahKategori')->middleware('auth');
    Route::get('/admin/Tartikel','UserController@tag')->middleware('auth');
    Route::post('/admin/tambahTartikel','UserController@tambahTag')->middleware('auth');
    Route::get('/admin/artikel','UserController@artikel')->middleware('auth');
    Route::post('/admin/tambahartikel','UserController@tambahArtikel')->middleware('auth');
    Route::get('/admin/tambartikel','UserController@tambartikel')->middleware('auth');
    Route::get('/admin/artikel/{id}','UserController@perbaruiKategori')->middleware('auth');
    Route::patch('/admin/artikel/update/{id}','UserController@updateartikel');

    Route::get('/admin/product','ProductController@index');
    Route::post('/admin/product/add','ProductController@createData');
    Route::get('/admin/product','ProductController@index')->middleware('auth');
    Route::get('/admin/product/create','ProductController@create');
    Route::patch('/admin/product/update/{id}','ProductController@update');
    Route::delete('/admin/product/delete/{id}','ProductController@delete');

    Route::get('/admin/category','CategoryController@index');
    Route::post('/admin/category/add','CategoryController@category')->middleware('auth');
    Route::patch('/admin/category/update/{id}','CategoryController@update');
    Route::delete('/admin/category/delete/{id}','CategoryController@cdelete')->name('delete-categori')->middleware('auth');
    

    Route::get('/admin/jadwal','UserController@jadwal');
});




//Userbiasa
Route::group(['middleware' => ['auth']], function () {
    //
    
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
});

