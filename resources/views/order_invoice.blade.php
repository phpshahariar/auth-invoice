@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <tr>
                            <th>SN No</th>
                            <th>Product Name</th>
                            <th>Product Qty</th>
                            <th>Product Price</th>
                            <th>Total Price</th>
                            <th>Pay Price</th>
                        </tr>
                        @php($sum = 0)
                        @foreach($products as $key => $product)
                        <tr>
                            <td>{!! $key+1 !!}</td>
                            <td>{!! $product->product_name !!}</td>
                            <td>{!! $product->product_qty !!}</td>
                            <td>Tk.{!! $product->product_price !!}</td>
                            <td>Tk.{!! $total = $product->product_price*$product->product_qty !!}</td>

                        </tr>
                            @php($sum = $sum+$total)
                        @endforeach
                    </table>
                    <table class="table table-bordered">
                        <tr>
                            <th>Sub Total</th>
                            <td>BDT {!! $sum !!}</td>
                        </tr>
                        <tr>
                            <th>Discount</th>
                            <td>BDT {!! $discount = 0 !!}</td>
                        </tr>
                        <tr>
                            <th>Tax</th>
                            <td>BDT {!! $tax = 0 !!}</td>
                        </tr>
                        <tr>
                            <th>Grand Total</th>
                            <td>BDT {!! $grandTotal = ($sum-$discount)+$tax !!}</td>
                        </tr>
                    </table>
                    <a href="" class="btn btn-success">Continue Buy</a>
                    <a href="" class="btn btn-success">Checkout</a>
                </div>
            </div>
        </div>
    </div>
@endsection