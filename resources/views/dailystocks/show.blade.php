@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Entry Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dailystocks.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Entry Id:</strong>
                {{ $dailystock->Entry_Id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Name:</strong>
                {{ $dailystock->Employee_Name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                {{ $dailystock->Product_Name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Entry Quantity:</strong>
                {{ $dailystock->Entry_Quantity}}
            </div>
        </div>
        
    </div>
    
@endsection