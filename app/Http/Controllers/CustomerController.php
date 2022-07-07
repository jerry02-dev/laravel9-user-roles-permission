<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $search =  $request->input('search');

        if ($search != "") {
            $customers = Customer::where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })->orderBy('name', 'asc')->paginate(10);

            $customers->appends(['search' => $search]);
            if (count($customers) > 0) {
                return view('customer.index',compact('customers'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
            }
            return back()->with('error', 'No results Found');
        } else {
            $customers = Customer::orderBy('name', 'asc')->paginate(10);
        }

        return view('customer.index',compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);
    
        Customer::create($request->all());
    
        return redirect()->route('customers.index')
                        ->with('success','Customer created successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit',compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
         request()->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);
    
        $customer->update($request->all());
    
        return redirect()->route('customers.index')
                        ->with('success','Customer updated successfully');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
    
        return redirect()->route('customers.index')
                        ->with('success','Customer deleted successfully');
    }
}
