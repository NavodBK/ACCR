<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_adminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

    }
    public function index(){
        return view('dash/admin/admins');
    }
}
