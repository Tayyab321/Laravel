<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Contact;
use App\Models\PortCategory;
use Hash;
use Session;
class PortHomeController extends Controller
{
    public function index(){
        $data = array();

        if(Session::has('LoginId')){
            $data = Register::where('user_id','=',Session::get('LoginId'))->first();
            $Cat = PortCategory::all();
            // $datas = compact('Cat','data');
        // return view('FrontPortWeb.Main_Layout.index')->with($datas);
        }
        return view('FrontPortWeb.Main_Layout.index',compact('data','Cat'));
       
    }

    public function register(){
        return view('FrontPortWeb.Main_Layout.Register');
    }
    public function reg_form(Request $request)
    {
        $request->validate([
            'F_name' => 'required'
        ]);
        $Reg = new Register();
        $Reg->F_Name = $request['F_name'];
        $Reg->L_Name = $request['L_name'];
        $Reg->Email = $request['email'];
        $Reg->Password = Hash::make($request['pswrd']);
        $Reg->C_Password = Hash::make($request['Cpswrd']);

        $Reg->save();
        return redirect()->route('login')->with('status','Your Account has been registered successfully');
    }

    public function login()
    {
        return view('FrontPortWeb.Main_Layout.Login');
    }
    public function loggedin(Request $request)
    {
        $request->validate([
            'email' =>'required',
            'pswrd' => 'required'
        ]);
        $Log = Register::where('email','=',$request->email)->first();
        if($Log){
            if(Hash::check($request->pswrd,$Log->Password)){
                $request->session()->put('LoginId',$Log->user_id);
                // return view('FrontPortWeb.index');
                return redirect()->route('portfolio.index')->with('status','Logged In');
            }else{
                return back()->with('fail','Password is incorrect');
            }
        }else{
            return back()->with('fail','Email is not registered');
        }
    }
    
    public function contact(Request $request) {
        $Con = new Contact();
        $Con->Email = $request['email'];
        $Con->Description = $request['des'];
        $Con->save();
        return redirect()->route('portfolio.index')->with('status','You have successfully submitted the form');
    }
    public function logout(){
        if(Session::has('LoginId')){
            Session::pull('LoginId');
            return redirect()->route('login');
        }
    }
}
