<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     function __construct()
     {
         $this->middleware('permission:product-list', ['only' => ['index','show']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
     }

    public function index(Request $request)
    {
        $search =  $request->input('search');

        if ($search != "") {
            $products = Product::where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })->orderBy('name', 'asc')->paginate(10);

            $products->appends(['search' => $search]);
            if (count($products) > 0) {
                return view('products.index',compact('products'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
            }
            return back()->with('error', 'No results Found');
        } else {
            $products = Product::orderBy('name', 'asc')->paginate(10);
        }

        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products,name',
            'detail' => 'required',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->added_by = auth()->id();
        $product->save();
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }
   
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show',compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }
  
    public function update(Request $request, Product $product)
    {
         $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $product->update($request->all());   
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
   
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
