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
 * 6 about
 * 7 blog
 * 8 team
 * 9 event
 * 10 others
 * 11 language
 * */

Route::get('/', 'HomeController@index');


//___1
Route::prefix('home')->group(function (){
    $prefixName = 'home';
    $controllerName = Str::studly($prefixName);
    Route::get('/', $controllerName.'Controller@index')->name($prefixName.'-dashboard');
    Route::get('news-list', $controllerName.'Controller@newsList')->name($prefixName.'-news-list');
    Route::get('single-news/{news}', $controllerName.'Controller@showSingleNews')->name($prefixName.'-single-news');

    Route::get('project-list', $controllerName.'Controller@projectList')->name($prefixName.'-project-list');
    Route::get('single-project/{project}', $controllerName.'Controller@showSingleProject')->name($prefixName.'-single-project');

    Route::get('blog-list', $controllerName.'Controller@blogList')->name($prefixName.'-blog-list');
    Route::get('single-blog/{blog}', $controllerName.'Controller@showSingleBlog')->name($prefixName.'-single-blog');

    Route::get('event-list', $controllerName.'Controller@eventList')->name($prefixName.'-event-list');
    Route::get('single-event/{event}', $controllerName.'Controller@showSingleEvent')->name($prefixName.'-single-event');

    Route::get('team-list', $controllerName.'Controller@teamList')->name($prefixName.'-team-list');
    Route::get('single-team/{team}', $controllerName.'Controller@showSingleTeam')->name($prefixName.'-single-team');

    Route::get('contact', $controllerName.'Controller@contactPage')->name($prefixName.'-contact');

    Route::get('about', $controllerName.'Controller@aboutPage')->name($prefixName.'-about');
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

//___6
Route::prefix('about')->group(function (){
    $prefixName = 'about';
    $controllerName = Str::studly($prefixName);
    //Route::get('list', $controllerName.'Controller@index')->name($prefixName.'-list');
    //Route::get('create', $controllerName.'Controller@create')->name($prefixName.'-create');
    //Route::post('store', $controllerName.'Controller@store')->name($prefixName.'-store');
    Route::get('show', $controllerName.'Controller@show')->name($prefixName.'-show');
    Route::get('edit', $controllerName.'Controller@edit')->name($prefixName.'-edit');
    Route::patch('update', $controllerName.'Controller@update')->name($prefixName.'-update');
    //Route::get('destroy/{'.Str::camel($prefixName).'}', $controllerName.'Controller@destroy')->name($prefixName.'-destroy');
});

//___7
Route::prefix('blog')->group(function (){
    $prefixName = 'blog';
    $controllerName = Str::studly($prefixName);
    Route::get('list', $controllerName.'Controller@index')->name($prefixName.'-list');
    Route::get('create', $controllerName.'Controller@create')->name($prefixName.'-create');
    Route::post('store', $controllerName.'Controller@store')->name($prefixName.'-store');
    Route::get('show/{'.Str::camel($prefixName).'}', $controllerName.'Controller@show')->name($prefixName.'-show');
    Route::get('edit/{'.Str::camel($prefixName).'}', $controllerName.'Controller@edit')->name($prefixName.'-edit');
    Route::patch('update/{'.Str::camel($prefixName).'}', $controllerName.'Controller@update')->name($prefixName.'-update');
    Route::get('destroy/{'.Str::camel($prefixName).'}', $controllerName.'Controller@destroy')->name($prefixName.'-destroy');
});

//___8
Route::prefix('team')->group(function (){
    $prefixName = 'team';
    $controllerName = Str::studly($prefixName);
    Route::get('list', $controllerName.'Controller@index')->name($prefixName.'-list');
    Route::get('create', $controllerName.'Controller@create')->name($prefixName.'-create');
    Route::post('store', $controllerName.'Controller@store')->name($prefixName.'-store');
    Route::get('show/{'.Str::camel($prefixName).'}', $controllerName.'Controller@show')->name($prefixName.'-show');
    Route::get('edit/{'.Str::camel($prefixName).'}', $controllerName.'Controller@edit')->name($prefixName.'-edit');
    Route::patch('update/{'.Str::camel($prefixName).'}', $controllerName.'Controller@update')->name($prefixName.'-update');
    Route::get('destroy/{'.Str::camel($prefixName).'}', $controllerName.'Controller@destroy')->name($prefixName.'-destroy');
});

//___9
Route::prefix('event')->group(function (){
    $prefixName = 'event';
    $controllerName = Str::studly($prefixName);
    Route::get('list', $controllerName.'Controller@index')->name($prefixName.'-list');
    Route::get('create', $controllerName.'Controller@create')->name($prefixName.'-create');
    Route::post('store', $controllerName.'Controller@store')->name($prefixName.'-store');
    Route::get('show/{'.Str::camel($prefixName).'}', $controllerName.'Controller@show')->name($prefixName.'-show');
    Route::get('edit/{'.Str::camel($prefixName).'}', $controllerName.'Controller@edit')->name($prefixName.'-edit');
    Route::patch('update/{'.Str::camel($prefixName).'}', $controllerName.'Controller@update')->name($prefixName.'-update');
    Route::get('destroy/{'.Str::camel($prefixName).'}', $controllerName.'Controller@destroy')->name($prefixName.'-destroy');
});

//___10
Route::prefix('others')->group(function (){
    $prefixName = 'others';
    $controllerName = Str::studly($prefixName);
    //Route::get('list', $controllerName.'Controller@index')->name($prefixName.'-list');
    //Route::get('create', $controllerName.'Controller@create')->name($prefixName.'-create');
    //Route::post('store', $controllerName.'Controller@store')->name($prefixName.'-store');
    Route::get('show', $controllerName.'Controller@show')->name($prefixName.'-show');
    Route::get('edit', $controllerName.'Controller@edit')->name($prefixName.'-edit');
    Route::patch('update', $controllerName.'Controller@update')->name($prefixName.'-update');
    //Route::get('destroy/{'.Str::camel($prefixName).'}', $controllerName.'Controller@destroy')->name($prefixName.'-destroy');
});

//___11
Route::prefix('language')->group(function (){
    $prefixName = 'language';
    $controllerName = Str::studly($prefixName);
    Route::get('list', $controllerName.'Controller@index')->name($prefixName.'-list');
    Route::get('create', $controllerName.'Controller@create')->name($prefixName.'-create');
    Route::post('store', $controllerName.'Controller@store')->name($prefixName.'-store');
    Route::get('show/{'.Str::camel($prefixName).'}', $controllerName.'Controller@show')->name($prefixName.'-show');
    Route::get('edit/{'.Str::camel($prefixName).'}', $controllerName.'Controller@edit')->name($prefixName.'-edit');
    Route::patch('update/{'.Str::camel($prefixName).'}', $controllerName.'Controller@update')->name($prefixName.'-update');
    Route::get('destroy/{'.Str::camel($prefixName).'}', $controllerName.'Controller@destroy')->name($prefixName.'-destroy');
});

Route::get('locale/{locale}', function ($langId) {

    $lang = App\Language::find($langId);
    Session::put('locale', $lang);
    return redirect()->back();

})->name('lang');


Route::get('changLang', function (){
    setLang('tnnn');
})->name('changLang');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




















Route::get('/clr', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    return 'Cache Clear';
});
