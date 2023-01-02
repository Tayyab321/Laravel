<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Prod = Product::all();
        $data = compact('Prod'); //array
        return view('Product.ListProd')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Product.AddProd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $Prod = new Product(); //model class obj
        $Prod->Pname = $request['name'];
        $Prod->Price = $request['price'];
        $Prod->Email = $request['email'];
        $Prod->Description = $request['desc'];

        $Prod->save();
        return redirect()->route('products.index')->with('status','You have successfully submitted the form!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $Prod = Product::find($id);
       $data = compact('Prod');
       return view('Product.EditProd')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $Prod = Product::find($id);
       $Prod->Pname = $request['name'];
       $Prod->Price = $request['price'];
       $Prod->Email = $request['email'];
       $Prod->Description = $request['desc'];

       $Prod->save();
       return redirect()->route('products.index')->with('status','Data Updated Successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $Prod = Product::find($id);
       $Prod->delete();

       return redirect()->route('products.index')->with('statusDelete','Product Deleted Successfully');
    }
}
