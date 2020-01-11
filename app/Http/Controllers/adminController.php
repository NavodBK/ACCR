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

        $ins = ins::count();
        $rda = rda::count();
        $police = police::count();
        $admin = admin::count();
        $user = User::count();


        //return $data;
        return view('dash/admin/adminDash')->with('ins', $ins)->with('rda',$rda)->with('police',$police)->with('admin',$admin)->with('user',$user);
    }



}
