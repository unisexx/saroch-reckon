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

// Route::get('/', function () {
//     return view('welcome');
// });

// SET LANGUAGE
Route::get('change/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return Redirect::back();
});


Route::get('/', 'HomeController@index');
Route::get('about', 'AboutController@index');

Route::get('product', 'ProductController@index');
Route::get('product-category/{id}', 'ProductController@category');

Route::get('video', 'VideoController@index');

Route::get('article', 'ArticleController@index');
Route::get('article/detail/{id}', 'ArticleController@detail');

Route::get('contact', 'ContactController@index');
Route::post('contact/save', 'ContactController@save');


// Admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
