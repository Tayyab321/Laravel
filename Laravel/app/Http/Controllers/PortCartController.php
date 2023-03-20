<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortProducts;
use App\Models\PortCart;

class PortCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cart = PortCart::join('product','product.Pid','=','cart.ProdId')->get();
        $Carts = PortCart::join('product','product.Pid','=','cart.ProdId')->first();
        $data = compact('Cart','Carts');
        return view('FrontPortWeb.Main_Layout.cart')->with($data);
    }

    public function addProductcart(Request $request){
        $prod_id =  $request->input("prod_id");
        $prod_qty =  $request->input("prod_qty");
        $prod_check = PortProducts::where('Pid',$prod_id)->first();

        if($prod_check){
            if(PortCart::where('ProdId',$prod_id)->exists()){
            return response()->json(['status' => $prod_check->prod_Name. ' Already Added to Cart']);
        } 
        else{
            $cart_item = new PortCart();
            $cart_item->ProdId = $prod_id;
            $cart_item->Prod_qty = $prod_qty;
            $cart_item->save();
            return response()->json(['status' => $prod_check->prod_Name. ' Added to Cart']);
        }
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Cid)
    {
        $Cart = PortCart::find($Cid);
        $Cart->delete();
        return redirect()->route('cart.index')->with('statusDelete','Product Removed from your Cart');
    }

}
