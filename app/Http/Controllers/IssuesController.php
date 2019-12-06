<?php

namespace App\Http\Controllers;

use App\Issue;
use App\Customer;
use App\Product;
use Illuminate\Http\Request;

class IssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues= Issue::latest() -> paginate(20);
        return view ('issues.index', compact('issues')) -> with('i', (request()->input('page',1)-1) *5 );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        $products = Product::all();
        return view('issues.create', compact('customers'), compact('products'));
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
                'Product_Name' => 'required',
                'Issue_Quantity' => 'required',
                'Customer_Name' => 'required',
            ]
            );
            Issue::create($request->all());
            return redirect() -> route('issues.index') ->with('success','An issue has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
        return view('issues.show',compact('issue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        $customers = Customer::all();
        $products = Product::all();
        return view ('issues.edit' , compact('issue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue)
    {
        $request->validate(
            [
                'Product_Name' => 'required',
                'Issue_Quantity' => 'required',
                'Customer_Name' => 'required',
            ]
            );
            $issue -> update($request->all());
            return redirect() ->route('issues.index') ->with('success','Issue updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue)
    {
        $issue->delete();
        return redirect() ->route('issues.index') ->with('success','Issue deleted successfully');
    }
    
}