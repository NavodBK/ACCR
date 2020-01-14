<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ins;
use Illuminate\Support\Facades\Hash;

class admin_insController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

    }
    public function index(){
        $ins = ins::all();
        return view('dash/admin/insurance')-> with('ins',$ins);
    }
    public function store(Request $request){
        $ins = new ins;
        $ins->fName = $request->fName;
        $ins->lName = $request->lName;
        $ins->email = $request->email;
        $ins->nic = $request->nic;
        $ins->phone = $request->phone;
        $ins->company = $request->company;
        $ins->password = Hash::make($request->psswd);
        $ins->save();
        return redirect(route('admin.ins'));
    }
    public function destroy(Request $id) {
        ins::destroy($id->id);
        return redirect(route('admin.ins'));
    }
}
