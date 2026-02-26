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
}