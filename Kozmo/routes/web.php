<?php

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


use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/exit', function (){\Illuminate\Support\Facades\Auth::logout();
    return redirect()->route('login');
})->name('log_out');



Route::group(['prefix' => 'panel', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('Kozmo.home');
    })->name('Kozmo.home');
    Route::get('/up_create','Panel\UpCategoryController@create')->name('Kozmo.up_category.create');
    Route::post('/up_create','Panel\UpCategoryController@create_post');
    Route::get('/up_index','Panel\UpCategoryController@index')->name('Kozmo.up_category.index');
    Route::get('/up_category_remove/{id}','Panel\UpCategoryController@remove')->name('Kozmo.up_category.remove');
    Route::get('/up_category_edit/{id}', 'Panel\UpCategoryController@edit')->name('Kozmo.up_category.edit');
    Route::post('/up_category_edit/{id}', 'Panel\UpCategoryController@edit_post');


    Route::get('/create','Panel\CategoryController@create')->name('Kozmo.category.create');
    Route::get('/category_index','Panel\CategoryController@index')->name('Kozmo.category.index');
    Route::post('/create','Panel\CategoryController@create_post');
    Route::get('/category_remove/{id}','Panel\CategoryController@remove')->name('Kozmo.category.remove');
    Route::get('/category_edit/{id}','Panel\CategoryController@edit')->name('Kozmo.category.edit');
    Route::post('/category_edit_post/{id}','Panel\CategoryController@edit_post');


    Route::get('/product_index','Panel\ProductController@index')->name('Kozmo.product.index');
    Route::get('/product_create','Panel\ProductController@create')->name('Kozmo.product.create');
    Route::post('/product_create','Panel\ProductController@create_post')->name('Kozmo.product.create_post');
    Route::get('/product_remove/{id}','Panel\ProductController@remove')->name('Kozmo.product.remove');
    Route::get('/product_edit/{id}','Panel\ProductController@edit')->name('Kozmo.product.edit');





});
