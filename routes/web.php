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
/*
Route::get('/', function () {
    return view('frontend.index');

    Route :: get('/about','homecontroller@aboutgunadarma');

});
*/

Route::get('/','frontController@index');


Route::get('admin', 'adminController@admin');

Route::get('setups', 'adminController@setups');

Route::post('addSettings','crudController@insertData');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('registration', 'adminController@registrasi');