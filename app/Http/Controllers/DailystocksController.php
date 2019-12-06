<?php

namespace App\Http\Controllers;

use App\Dailystock;
use App\Employee;
use App\Product;
use Illuminate\Http\Request;

class DailystocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dailystocks= Dailystock::latest() -> paginate(20);
        return view ('dailystocks.index', compact('dailystocks')) -> with('i', (request()->input('page',1)-1) *5 );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        $products = Product::all();
        return view('dailystocks.create', compact('employees'), compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'Employee_Name' => 'required',
                'Product_Name' => 'required',
                'Entry_Quantity' => 'required',
            ]
            );
            Order::create($request->all());
            return redirect() -> route('dailystocks.index') ->with('success','An entry has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dailystock  $dailystock
     * @return \Illuminate\Http\Response
     */
    public function show(Dailystock $dailystock)
    {
        $employees = Employee::all();
        $products = Product::all();
        return view('dailystocks.show',compact('dailystock'), compact('employees'), compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dailystock  $dailystock
     * @return \Illuminate\Http\Response
     */
    public function edit(Dailystock $dailystock)
    {
        return view ('dailystocks.edit' , compact('dailystock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dailystock  $dailystock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dailystock $dailystock)
    {
        $request->validate(
            [
                
                'Employee_Name' => 'required',
                'Product_Name' => 'required',
                'Order_Quantity' => 'required',
            ]
            );
            $dailystock -> update($request->all());
            return redirect() ->route('dailystocks.index') ->with('success','Entry updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dailystock  $dailystock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dailystock $dailystock)
    {
        $dailystock->delete();
        return redirect() ->route('dailystocks.index') ->with('success','Entry deleted successfully');
    }
}
