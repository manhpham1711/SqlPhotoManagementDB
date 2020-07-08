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

Route::get('/index', 'Admin\AdminController@index')->name('admin.index');

Route::get('/admin/categories', "Admin\CategoryController@index");

Route::get("/admin/photo", "Admin\PhotoController@index");
Route::get("/admin/add", "Admin\FunctionController@form_add");
Route::post('/add', "Admin\FunctionController@add");
