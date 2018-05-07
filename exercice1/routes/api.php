<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/customers', 'CustomersController@getAllCustomers', function () {
    return Customers::all();
});

Route::get('/customers/{id}', 'CustomersController@getCustomer', function ($id) {
    return Customers::find($id);
});

Route::post('/customers', 'CustomersController@addCustomer', function (Request $request) {
    return Customers::create($request->all);
});

Route::delete('/customers/{id}', 'CustomersController@deleteCustomers', function () {
    Customers::find($id)->delete();

    return 204;
});

Route::put('/customers/{id}', 'CustomersController@updateCustomers', function (Request $request, $id) {
    $customers = Customers::findOrFail($id);
    $customers->update($request->all());

    return $customers;;
});

