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


/*
 * 1 user
 * */

Route::get('/', 'HomeController@index');


//___1
Route::prefix('news')->group(function (){
    $prefixName = 'news';
    $controllerName = Str::studly($prefixName);
    Route::get('list', $controllerName.'Controller@index')->name($prefixName.'-list');
    Route::get('create', $controllerName.'Controller@create')->name($prefixName.'-create');
    Route::post('store', $controllerName.'Controller@store')->name($prefixName.'-store');
    Route::get('show/{'.Str::camel($prefixName).'}', $controllerName.'Controller@show')->name($prefixName.'-show');
    Route::get('edit/{'.Str::camel($prefixName).'}', $controllerName.'Controller@edit')->name($prefixName.'-edit');
    Route::patch('update/{'.Str::camel($prefixName).'}', $controllerName.'Controller@update')->name($prefixName.'-update');
    Route::get('destroy/{'.Str::camel($prefixName).'}', $controllerName.'Controller@destroy')->name($prefixName.'-destroy');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
