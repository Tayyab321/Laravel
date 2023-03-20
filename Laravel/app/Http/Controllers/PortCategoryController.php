<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortCategory;

class PortCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cat = PortCategory::all();
        $data = compact('Cat');
        return view('FrontPortWeb.Admin_Dashboard.Category.ViewCat')->with($data);
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('FrontPortWeb.Admin_Dashboard.Category.AddCat');
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
            'image' =>'required',
            'desc' => 'required'
        ]);
        $Cat = new PortCategory();
        $Cat->cat_Name = $request['name'];
        
        $files = $request->file('image');
        $fileName = $files->getClientOriginalName();
        $folder = "assets2/Images/";
        $fileLoc = $folder.$fileName;
        $files->move($folder,$fileLoc);
        $Cat->CatImg = $fileLoc; 
        $Cat->cat_Desc = $request['desc'];

        $Cat->save();
        return redirect()->route('Admin-category.index')->with('status','Category Successfully be added!');
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
        $Cat = PortCategory::find($id);
        $data = compact('Cat');
        return view('FrontPortWeb.Admin_Dashboard.Category.EditCat')->with($data);
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
        {
            $request->validate([
                'name' => 'required',
                'image' =>'required',
                'desc' => 'required'
            ]);
            $Cat = PortCategory::find($id);
            $Cat->cat_Name = $request['name'];
            
            $files = $request->file('image');
            $fileName = $files->getClientOriginalName();
            $folder = "assets2/Images/";
            $fileLoc = $folder.$fileName;
            $files->move($folder,$fileLoc);
            $Cat->CatImg = $fileLoc; 
            $Cat->cat_Desc = $request['desc'];
    
            $Cat->save();
            return redirect()->route('Admin-category.index')->with('status','Category Updated Successfully');
        }
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
}
