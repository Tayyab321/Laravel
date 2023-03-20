<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortProducts;
use App\Models\PortCategory;
use App\Models\PortProductInfo;

class PortProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
       $Prod = PortProducts::join('categories','categories.Cid','=','product.CatId')->get();
       $data = compact('Prod');
        return view('FrontPortWeb.Admin_Dashboard.Product.ListProd')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Cat = PortCategory::all();
        $data = compact('Cat');
        return view('FrontPortWeb.Admin_Dashboard.Product.AddProd')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'prodImage' => 'required',
        ]);

        $Prod = new PortProducts();
        $Prod->prod_Name = $request['name'];
        $Prod->CatId = $request['catName'];
        $Prod->prod_Price = $request['price'];
        
        $files = $request->file('prodImage');
        $fileName = $files->getClientOriginalName();
        $folder = "assets2/Images/";
        $fileLoc = $folder.$fileName;
        $files->move($folder,$fileLoc);
        $Prod->prod_Image = $fileLoc; 

        $Prod->save();
        return redirect()->route('Admin-product.index')->with('status','Product Successfully be added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Prod = PortProducts::join('categories','categories.Cid','=','product.CatId')
        ->where('categories.Cid','=',$id)->get();
         $data = compact('Prod');
         return view('FrontPortWeb.Main_Layout.Products')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Prod = PortProducts::find($id);
        $Cat = PortCategory::all();
        $data = compact('Cat','Prod');
        return view('FrontPortWeb.Admin_Dashboard.Product.EditProd')->with($data);
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
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'prodImage' => 'required',
        ]);

        $Prod = PortProducts::find($id);
        $Prod->prod_Name = $request['name'];
        $Prod->CatId = $request['catName'];
        $Prod->prod_Price = $request['price'];
        
        $files = $request->file('prodImage');
        $fileName = $files->getClientOriginalName();
        $folder = "assets2/Images/";
        $fileLoc = $folder.$fileName;
        $files->move($folder,$fileLoc);
        $Prod->prod_Image = $fileLoc; 

        $Prod->save();
        return redirect()->route('Admin-product.index')->with('status','Product Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function stores(request $request){
        $Prod = PortProducts::join('categories','categories.Cid','=','product.CatId')->get();
        $data = compact('Prod');
        return view('FrontPortWeb.Main_Layout.store')->with($data);
    }

    public function ProdInfo($CatName,$Prodid){
        $ProdInfo = PortProductInfo::join('categories','categories.Cid','=','product_info.Categoryid')->join('product',
        'product.Pid','=','product_info.ProductId')->where('ProductId','=',$Prodid)->first();
        $Prods = PortProducts::join('categories','categories.Cid','=','product.CatId')
        ->where('categories.cat_Name','=',$CatName)->get();
        $data = compact('ProdInfo','Prods');
        
        return view('FrontPortWeb.Main_Layout.Product_Info')->with($data);


    }
    public function ProdInfoAdd(){
        $Cat = PortCategory::all();
        $Prod = PortProducts::all();
        $ProdInfo = PortProductInfo::all();
        $data = compact('Cat','Prod','ProdInfo');
        return view('FrontPortWeb.Admin_Dashboard.Product.AddProdInfo')->with($data);
    }
    public function ProdInfostore(Request $request)
    {
        $request->validate([
            'ProdName' => 'required',
            'catName' => 'required',
            'desc' => 'required',
        ]);

        $ProdInfo = new PortProductInfo();
        $ProdInfo->ProductId = $request['ProdName'];
        $ProdInfo->Categoryid = $request['catName'];
        $ProdInfo->prod_desc = $request['desc'];

        $ProdInfo->save();
        return redirect()->route('Admin-product.index')->with('status','Product Info Successfully Added');
    }
}
