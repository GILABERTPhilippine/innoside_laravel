<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function getAllCustomers()
    {
        return Customers::all();
    }

    public function getCustomer($id)
    {
        return Customers::find($id);
    }

    public function addCustomer(Request $request)
    {
        return Customers::create($request->all());
    }

    public function deleteCustomers(Request $request, $id)
    {
        $customers = Customers::findOrFail($id);
        $customers->delete();

        return 204;
    }

    public function updateCustomers(Request $request, $id)
    {
        $customers = Customers::findOrFail($id);
        $customers->update($request->all());

        return $customers;
    }
}