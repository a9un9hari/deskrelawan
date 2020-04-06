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

Route::group(['prefix'=>'dashboard','as' => 'dashboard.', 'middleware'=>['auth','verified']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    // Asset detail
    Route::resource('asset-category', 'AssetCategoriesController');
});


// Route::get('/home', 'HomeController@index')->name('home');