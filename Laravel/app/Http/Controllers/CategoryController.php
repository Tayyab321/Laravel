<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Search =  $request['search'] ?? ''; 

        $Cat = Category::join('products','products.id','=','category.Prodid')->get();
        if($Search != ''){
            $Cat = Category::where('cat_Name','Like',"$Search%")->paginate(2);
        }else{
            $Cat = Category::join('products','products.id','=','category.Prodid')->paginate(2);
        }
        $data = compact('Cat');
        return view('Category.ViewCat')->with($data);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Prod = Product::all();
        $data = compact('Prod');
        return view('Category.AddCat')->with($data);
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
            'desc' => 'required'
        ]);
        $Cat = new Category();
        $Cat->cat_Name = $request['name'];
        $Cat->Prodid = $request['prodName'];
        $Cat->des = $request['desc'];

        $Cat->save();
        return redirect()->route('category.index')->with('status','You have successfully submitted the Category form');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Cid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Cid)
    {
        $Cat = Category::find($Cid);
        // $data = compact('Cat');

        $Prod = Product::all();
        $data = compact('Prod','Cat');

        return view('Category.EditCat')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Cid)
    {
        $Cat = Category::find($Cid);
        $Cat->cat_Name = $request['name'];
        $Cat->Prodid = $request['prodName'];
        $Cat->des = $request['desc'];

        $Cat->save();
        return redirect()->route('category.index')->with('status','You have successfully updated the Category form');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Cid)
    {
        $Prod = Category::find($Cid);
        $Prod->delete();
        return redirect()->route('category.index')->with('trash','Data moved to the Trash  ');
    }
 
    public function trash()
    {
        $Cat = Category::onlyTrashed()->get();
        $data = compact('Cat');
        return view('Category.Category_Trash')->with($data);
    }
    public function restore($Cid)
    {
        $Cat = Category::withTrashed()->find($Cid);
        $Cat->restore();
        $data = compact('Cat');
        return redirect()->route('category.index')->with('restore','You have successfully restore your data');
        // return redirect()->back()->with('restore','You have successfully restore your data'); //return to CatTrash Page
    }
    public function delete($Cid)
    {
        $Prod = Category::withTrashed()->find($Cid);
        $Prod->forceDelete();
        return redirect()->back()->with('delete','Data deleted successfully');
        // return redirect()->route('category.index')->with('delete','Data deleted successfully'); //return to ViewCategory Paeg by index method
       
    }
}
