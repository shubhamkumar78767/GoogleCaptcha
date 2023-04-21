<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'g-recaptcha-response' => 'recaptcha',//recaptcha validation
         ]);
   
         if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
   
         }else{
            Session::flash('message','Form submit Successfully.');
         }
         return redirect('/login');
      
    }
}
