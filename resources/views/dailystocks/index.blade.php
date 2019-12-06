@extends('layouts.app')
@section('content')
<body>
<div class="container">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Entries</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('dailystocks.create') }}"> Add new Entry</a>
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
            <th>Entry Id</th>
            <th>Employee Name</th>
            <th>Product Name</th>
            <th>Entry Quantity</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($dialystocks as $dailystock)
        <tr>
            <!--<td>{{ ++$i }}</td>-->
            <td>{{ $dailystock->Entry_Id }}</td>
            <td>{{ $dailystock->Employee_Name }}</td>
            <td>{{ $dailystock->Product_Name }}</td>
            <td>{{ $dailystock->Entry_Quantity }}</td>
            <td>
                <form action="{{ route('dailystocks.destroy',$dailystock->Entry_Id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('dailystocks.show',$dailystock->Entry_Id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('dailystocks.edit',$dailystock->Entry_Id) }}">Edit</a>
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