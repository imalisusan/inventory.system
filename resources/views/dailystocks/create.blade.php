@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Entry</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('dailystocks.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('dailystocks.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Name:</strong>
                <select type="text" style="width:300px"name="Employee_Name" class="form-control"  required>
                @foreach($employees as $employee)
                <option value="{{$employee->Employee_Id}} : {{$employee->Employee_Name}}">{{$employee->Employee_Name}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                <select type="text" style="width:300px"name="Product_Name" class="form-control" required>
                @foreach($products as $product)
                <option value="{{$product->Product_Id}} : {{$product->Product_Name}}">{{$product->Product_Name}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Completed Quantity:</strong>
                <input type="text" style="width:300px"name="Completed_Quantity" class="form-control" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection