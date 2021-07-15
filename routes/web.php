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

Route::get('/', function () {
    return view('welcome');
});
Route::namespace('admin')->group(function(){
    Route::prefix('admin')->group(function () {
        Route::get('login', 'LoginController@login');
        Route::post('dologin', 'LoginController@dologin');
        Route::middleware('loginvalidate')->group(function () {
            Route::get('index', 'IndexController@index');
            Route::get('main', 'IndexController@main');
            Route::get('profile', 'IndexController@profile');
            Route::get('editpwd', 'IndexController@editpwd');
            Route::get('logout', 'IndexController@logout');
            Route::get('buttons', 'UiController@buttons');
            Route::get('cards', 'UiController@cards');
            Route::get('grid', 'UiController@grid');
            Route::get('icons', 'UiController@icons');
            Route::get('tables', 'UiController@tables');
            Route::get('modals', 'UiController@modals');
            Route::get('popover', 'UiController@popover');
            Route::get('alerts', 'UiController@alerts');
            Route::get('pagination', 'UiController@pagination');
            Route::get('progress', 'UiController@progress');
            Route::get('tabs', 'UiController@tabs');
            Route::get('typography', 'UiController@typography');
            Route::get('step', 'UiController@step');
            Route::get('other', 'UiController@other');
            Route::get('elements', 'FormController@elements');
            Route::get('radio', 'FormController@radio');
            Route::get('checkbox', 'FormController@checkbox');
            Route::get('switch', 'FormController@switch');
            Route::get('doc', 'ExampleController@doc');
            Route::get('gallery', 'ExampleController@gallery');
            Route::get('config', 'ExampleController@config');
            Route::get('rabc', 'ExampleController@rabc');
            Route::get('adddoc', 'ExampleController@adddoc');
            Route::get('guide', 'ExampleController@guide');
            Route::get('datatable', 'ExampleController@datatable');
            Route::get('error', 'ExampleController@error');
        });
    });
});

Route::fallback(function(){
    return '这是我是最后的倔强';
});

