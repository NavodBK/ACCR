<?php

namespace App\Http\Controllers;

use App\report;
use App\confirmedrReport;
use Illuminate\Http\Request;

class rdaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:rda');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reports = report::all();
        $confirmed = confirmedrReport::all();
        
        return view('dash/rdaDash')->with('reports',$reports)->with('confirmed',$confirmed);
    }
}
