@extends('master')

@section('title')
    Manage Product Page
@endsection

@section('body')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">All Product Info</div>
                        <div class="card-body">
                            <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Product Name</th>
                                    <th>Category Name</th>
                                    <th>Brand Name</th>
                                    <th>Product Price</th>
                                    <th>Product Description</th>
                                    <th>Product Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category}}</td>
                                    <td>{{$product->brand}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>
                                        <img src="{{asset($product->image)}}" alt="" height="50" width="70">
                                    </td>
                                    <td>
                                        <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

