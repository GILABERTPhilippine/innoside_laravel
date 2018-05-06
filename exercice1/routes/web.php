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

Route::get('customers', 'CustomersController@getAllCustomers', function () {
    return 'customers ';
});

Route::get('customers/{id}', 'CustomersController@getCustomers', function ($id) {
    return 'customers ' . $id;
});

Route::post('customers', 'CustomersController@addCustomers', function () {
    return 'customers ';
});

Route::delete('customers/{id}', 'CustomersController@deleteCustomers', function ($id) {
    return 'customers ' . $id;
});

Route::put('customers/{id}', 'CustomersController@updateCustomers', function ($id) {
    return 'customers ' . $id;
});
