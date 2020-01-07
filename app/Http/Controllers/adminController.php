<?php

namespace App\Http\Controllers;

use App\ins;
use App\police;
use App\rda;
use App\admin;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $ins = ins::all();
        $rda = rda::all();
        $police = police::all();
        $admin = admin::all();
        $user = User::all();

        $data=array(
            'ins'=>$ins,
            'rda'=>$rda,
            'police'=>$police,
            'admin'=>$admin,
            'user'=>$user,
        );
        //return $data;
        return view('dash/adminDash')->with('staff',$data);
    }

    public function showAddUsers(){
        return view('dataEdit/addNewUsers');
    }
    public function rdaStore(Request $request)
    {
        $request->validate([
            'fName' => ['required', 'string', 'max:255'],
            'lName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nic' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'max:10','min:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $rda = new rda;
        $rda->fName = $request->fName;
        $rda->lName = $request->lName;
        $rda->email = $request->email;
        $rda->nic =$request->nic;
        $rda->phone = $request->mobile;
        $rda->password= Hash::make($request->password);
        $rda->save();

        return redirect('admin');

    }

}
