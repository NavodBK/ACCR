<?php

namespace App\Http\Controllers;
use App\report;
use App\confirmedrReport;
use Illuminate\Http\Request;

class policeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:police');
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
        return view('dash/policeDash')->with('reports',$reports)->with('confirmed',$confirmed);
    }
}
