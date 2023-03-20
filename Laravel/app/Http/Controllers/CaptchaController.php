<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortCategory;

class CaptchaController extends Controller
{
    // public function index(){
    //    $Category =  PortCategory::all();
    //    $data = compact('Category');
    //    return view('FrontPortWeb.Main_Layout.index')->with($data);
    // }

    // public function index(){
    //     return view('Welcome');
    // }
    public function reloadCaptcha(){
        return response()->json(['captcha'=> captcha_img()]);
    }
}
