<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;  

class CustomerController extends Controller
{
    public function new()
    {
        return view('customers.new');
    }

    public function create(Request $request)
    {
        
        $customer = new Customer();

        
        $customer->setFirstname($request->firstname);
        $customer->setSurname($request->surname);

        
        $customer->save();

        return "Customer saved! Firstname: " . $request->firstname . ", Surname: " . $request->surname;
    }

    public function edit($id)
    {
        $customer = Customer::find($id);           
        return view('customers.edit')->with('customer', $customer); 
    }

    public function update(Request $request)
    {
        $customer = Customer::find($request->id);  
        $customer->setFirstname($request->firstname);
        $customer->setSurname($request->surname);
        $customer->save();                         
        return "Customer updated! Firstname: " . $customer->firstname . ", Surname: " . $customer->surname;
    }
}