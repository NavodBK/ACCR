<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\police;
use Illuminate\Support\Facades\Hash;

class admin_policeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

    }
    public function index(){
        $police = police::all();
        return view('dash/admin/police')->with('police',$police);
    }

    public function store(Request $request){
        $police = new police;
        $police->fName = $request->fName;
        $police->lName = $request->lName;
        $police->email = $request->email;
        $police->nic = $request->nic;
        $police->phone = $request->phone;
        $police->password = Hash::make($request->psswd);
        $police->save();
        return redirect(route('admin.police'));
    }
}
