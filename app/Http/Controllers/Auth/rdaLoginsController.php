<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class rdaLoginsController extends Controller
{
    public function  __construct()
    {
        $this->middleware('guest:rda');
    }
    public function showLogin(){
        return view('auth.rdaLogin');
    }
    public function login(Request $request){

        //validation
        $credentials =$this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //login the user
        if (Auth::guard('rda')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            return redirect()->intended(route('rda'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
