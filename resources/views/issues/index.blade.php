@extends('layouts.app')
@section('content')
<body>
<div class="container">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Issues</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('issues.create') }}"> Add new Issue</a>
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
            <th>Issue Id</th>
            <th>Customer Name</th>
            <th>Product Name</th>
            <th>Issue Quantity</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($issues as $issue)
        <tr>
            <!--<td>{{ ++$i }}</td>-->
            <td>{{ $issue->Issue_Id }}</td>
            <td>{{ $issue->Customer_Name }}</td>
            <td>{{ $issue->Product_Name }}</td>
            <td>{{ $issue->Issue_Quantity }}</td>
            <td>
                <form action="{{ route('issues.destroy',$issue->Issue_Id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('issues.show',$issue->Issue_Id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('issues.edit',$issue->Issue_Id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $issues->links() !!}

</div>

</body>
@endsection