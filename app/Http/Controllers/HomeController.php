<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\Product;

class HomeController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $customers_count = Customer::count();
        $suppliers_count = Supplier::count();
        $products_count = Product::count();

        return view('home',compact('customers_count','suppliers_count','products_count'));
    }
}
