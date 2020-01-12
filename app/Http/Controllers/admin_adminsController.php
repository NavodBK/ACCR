<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class admin_adminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

    }
    public function index(){
        $admins = admin::all();
        return view('dash/admin/admins')->with('admins',$admins);

    }
    public function store(Request $request){
        $admin = new admin;
        $admin->fName = $request->fName;
        $admin->lName = $request->lName;
        $admin->email = $request->email;
        $admin->nic = $request->nic;
        $admin->phone = $request->phone;
        $admin->password = Hash::make($request->psswd);
        $admin->save();
        return redirect(route('admin.admins'));
    }
    public function destroy(Request $id) {

       admin::destroy($id->id);
       return redirect(route('admin.admins'));
    }
}
