@extends('layouts.app')
@section('content')
<body>
<div class="container">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Add new Product</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Product Quantity</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <!--<td>{{ ++$i }}</td>-->
            <td>{{ $product->Product_Id }}</td>
            <td>{{ $product->Product_Name }}</td>
            <td>{{ $product->Description }}</td>
            <td>{{ $product->Product_Quantity }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->Product_Id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show',$product->Product_Id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->Product_Id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

</div>

</body>
@endsection