<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function saveProduct(Request $request){
        $products = new Invoice();
        $products->product_name = $request->product_name;
        $products->product_qty = $request->product_qty;
        $products->product_price = $request->product_price;
        $products->save();
        return redirect()->back();
    }

    public function showProduct(){
        $products = Invoice::all();
        return view('order_invoice', compact('products'));
    }
}
