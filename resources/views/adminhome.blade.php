@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="alert alert-success" role="alert">
                            <p>You're Logged in as ADMINISTRATION</p>
                        </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Member Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        @foreach($users as $key => $value)
                            <tr>
                                <td>{!! $key+1 !!}</td>
                                <td>{!! $value->name !!}</td>
                                <td>{!! $value->email !!}</td>
                            </tr>
                        @endforeach
                    </table>
                        <form action="{!! url('/save-product') !!}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Product Name</label>
                                <input type="text" class="form-control" name="product_name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Product Qty</label>
                                <input type="number" class="form-control" name="product_qty">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Product Price</label>
                                <input type="number" class="form-control" name="product_price">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="btn" class="form-control btn-success">Add Product</button>
                            </div>
                        </form>

                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Name</label>
                                <input type="text" class="form-control" name="product_name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Say Something</label>
                                <textarea name="say_something" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="btn" class="form-control btn-success">Send Mail</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
