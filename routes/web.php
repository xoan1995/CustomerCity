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
Route::group(['prefix' => 'cities'], function () {
    Route::get('index', 'CityController@index')->name('cities.index');
    Route::get('creat', 'CityController@create')->name('cities.create');
    Route::get('show/{id}', 'CityController@show')->name('cities.show');
    Route::get('edit/{id}', 'CityController@edit')->name('cities.edit');
    Route::get('destroy/{id}', 'CityController@destroy')->name('cities.delete');
    Route::post('update/{id}', 'CityController@update')->name('cities.update');
    Route::post('store', 'CityController@store')->name('cities.store');
    Route::get('customer/{id}','CityController@customerCity')->name('cities.customer');
});


Route::group(['prefix' => 'customers'], function () {
    Route::get('index', 'CustomerController@index')->name('customers.index');
    Route::get('creat', 'CustomerController@create')->name('customers.create');
    Route::get('show/{id}', 'CustomerController@show')->name('customers.show');
    Route::get('edit/{id}', 'CustomerController@edit')->name('customers.edit');
    Route::get('destroy/{id}', 'CustomerController@destroy')->name('customers.destroy');
    Route::post('update/{id}', 'CustomerController@update')->name('customers.update');
    Route::post('store', 'CustomerController@store')->name('customers.store');
//    Route::get('/filter','CustomerController@filterByCity')->name('customers.filterByCity');
});
