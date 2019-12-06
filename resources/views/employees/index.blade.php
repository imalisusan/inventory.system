@extends('layouts.app')
@section('content')
<body>
<div class="container">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employees</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}"> Add new Employee</a>
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
            <th>Employee Id</th>
            <th>Employee Name</th>
            <th>National ID No</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <!--<td>{{ ++$i }}</td>-->
            <td>{{ $employee->Employee_Id }}</td>
            <td>{{ $employee->Employee_Name }}</td>
            <td>{{ $employee->National_ID_No }}</td>
            <td>
                <form action="{{ route('employees.destroy',$employee->Employee_Id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('employees.show',$employee->Employee_Id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->Employee_Id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $employees->links() !!}

</div>

</body>
@endsection