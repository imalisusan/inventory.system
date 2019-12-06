@extends('layouts.app')
@section('content')
<body>
<div class="container">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Orders</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('orders.create') }}"> Add new Order</a>
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
            <th>Order Id</th>
            <th>Customer_Name</th>
            <th>Product Name</th>
            <th>Order Quantity</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($orders as $order)
        <tr>
            <!--<td>{{ ++$i }}</td>-->
            <td>{{ $order->Order_Id }}</td>
            <td>{{ $order->Customer_Name }}</td>
            <td>{{ $order->Product_Name }}</td>
            <td>{{ $order->Order_Quantity }}</td>
            <td>
                <form action="{{ route('orders.destroy',$order->Order_Id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('orders.show',$order->Order_Id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('orders.edit',$order->Order_Id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $orders->links() !!}

</div>

</body>
@endsection