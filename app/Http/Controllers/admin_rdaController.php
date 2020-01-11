<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rda;
use Illuminate\Support\Facades\Hash;

class admin_rdaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

    }
    public function index(){
        $rda = rda::all();
        return view('dash/admin/rda')->with('rda',$rda);
    }
    public function store(Request $request){
        $rda = new rda;
        $rda->fName = $request->fName;
        $rda->lName = $request->lName;
        $rda->email = $request->email;
        $rda->nic = $request->nic;
        $rda->phone = $request->phone;
        $rda->password = Hash::make($request->psswd);
        $rda->save();
        return redirect(route('admin.rda'));
    }
}
