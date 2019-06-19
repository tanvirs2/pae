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
 * 1 home
 * 2 admin
 * 3 news
 * 4 contact
 * 5 project
 * */

Route::get('/', 'HomeController@index');


//___1
Route::prefix('home')->group(function (){
    $prefixName = 'home';
    $controllerName = Str::studly($prefixName);
    Route::get('/', $controllerName.'Controller@index')->name($prefixName.'-dashboard');
    Route::get('news-list', $controllerName.'Controller@newsList')->name($prefixName.'-news-list');
    Route::get('single-news/{news}', $controllerName.'Controller@showSingleNews')->name($prefixName.'-single-news');

    Route::get('blog-list', $controllerName.'Controller@projectList')->name($prefixName.'-blog-list');
    Route::get('single-blog/{project}', $controllerName.'Controller@showSingleProject')->name($prefixName.'-single-blog');

    Route::get('contact', $controllerName.'Controller@contactPage')->name($prefixName.'-contact');
});

//___2
Route::prefix('admin')->group(function (){
    $prefixName = 'admin';
    $controllerName = Str::studly($prefixName);
    Route::get('/', $controllerName.'Controller@index')->name($prefixName.'-dashboard');
});

//___3
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


//___4
Route::prefix('contact')->group(function (){
    $prefixName = 'contact';
    $controllerName = Str::studly($prefixName);
    Route::get('list', $controllerName.'Controller@index')->name($prefixName.'-list');
    //Route::get('create', $controllerName.'Controller@create')->name($prefixName.'-create');
    Route::post('store', $controllerName.'Controller@store')->name($prefixName.'-store');
    Route::get('show/{'.Str::camel($prefixName).'}', $controllerName.'Controller@show')->name($prefixName.'-show');
    //Route::get('edit/{'.Str::camel($prefixName).'}', $controllerName.'Controller@edit')->name($prefixName.'-edit');
    Route::patch('update/{'.Str::camel($prefixName).'}', $controllerName.'Controller@update')->name($prefixName.'-update');
    Route::get('destroy/{'.Str::camel($prefixName).'}', $controllerName.'Controller@destroy')->name($prefixName.'-destroy');
});

//___5
Route::prefix('project')->group(function (){
    $prefixName = 'project';
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




















Route::get('/clr', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    return 'Cache Clear';
});
