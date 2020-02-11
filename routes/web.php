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
    // return view('welcome');
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('programs', 'ProgramController');

Route::get('web-dev', 'ProgramsController@webDev');

Route::get('mobile-dev', 'ProgramsController@mobileDev');

Route::get('data-science', 'ProgramsController@dataScience');

Route::get('product-design', 'ProgramsController@productDesign');
