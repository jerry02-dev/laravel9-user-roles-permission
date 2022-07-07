<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        $search =  $request->input('search');

        if ($search != "") {
            $suppliers = Supplier::where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })->orderBy('name', 'asc')->paginate(10);

            $suppliers->appends(['search' => $search]);
            if (count($suppliers) > 0) {
                return view('suppliers.index',compact('suppliers'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
            }
            return back()->with('error', 'No results Found');
        } else {
            $suppliers = Supplier::orderBy('name', 'asc')->paginate(10);
        }

        return view('suppliers.index',compact('suppliers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
         request()->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);
    
        Supplier::create($request->all());
    
        return redirect()->route('suppliers.index')
                        ->with('success','Supplier created successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit(Supplier $supplier)
    {
         return view('suppliers.edit',compact('supplier'));
    }

    public function update(Request $request, Supplier $supplier)
    {
         request()->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);
    
        $supplier->update($request->all());
    
        return redirect()->route('suppliers.index')
                        ->with('success','Supplier updated successfully');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
    
        return redirect()->route('suppliers.index')
                        ->with('success','Supplier deleted successfully');
    }
}
