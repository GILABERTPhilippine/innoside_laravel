<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\customers;

class CustomersController extends Controller
{
    public function getAllCustomers()
    {
        return Customers::all();
    }

    // public function getCustomer($id)
    // {
    //     $customers = Customers::findorfail($id);
    //     return View::make('customers')->with('customers', $customers);
    // }
    public function getCustomer($id)
    {
        $customers = customers::findorfail($id);
        return View::make('customers.customer_details')->with('customers', $customers);

    }

    public function addCustomer()
    {
        return customers::create();
    }

    public function deleteCustomers($id)
    {
        $customers = customers::findOrFail($id);
        $customers->delete();

        return View::make('customers')->with('customers', $customers);
    }

    public function updateCustomers(Request $request, $id)
    {
        $customers = customers::findOrFail($id);
        $customers->update($request->all());

        return $customers;
    }
}
