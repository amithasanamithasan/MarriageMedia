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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@index')->name('user');

Route::get('/admin', 'AdminController@index')->name('admin');

//////////////////////////////////////////////////////////////////////////
Route::get('/user/gallery', 'UserController@Gallery')->name('user.gallery');
Route::get('/user/Contact', 'UserController@Contact_us')->name('user.Contact');


///////////////user register insert/////////////////////////////////////////
Route::get('/user/register', 'UserController@register')->name('user.register');
route::post('store/post', 'UserController@storepost')->name('store.post');
route::get('/search','UserController@search');


//////////////admin crud oparatin from user///////////////////////////////
Route::get('admin/all/category', 'AdminController@AllCategory')->name('all.category');
route::get('/view/category/{id}', 'AdminController@Viewcategory')->name('viewcat');
route::get('/delete/category/{id}', 'AdminController@Deletecategory')->name('deletecategory');


route::get('/edit/category/{id}', 'AdminController@Editcategory')->name('editcategory');
route::post('update/category/{id}', 'AdminController@Updatecategory');


/////////////////////user crud oparation////////////////////////


Route::get('user/view/category', 'UserController@ViewCategory')->name('view.category');

Route::get('admin/addmember', 'AdminController@addmember')->name('addmember');

Route::post('Create/Post', 'AdminController@Addpost')->name('Create.Post');

/////////////search for name/////////////////////
route::get('/search','AdminController@search');

Route::get('user/profile', 'UserController@profile')->name('profile');
