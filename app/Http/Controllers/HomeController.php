<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicles;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $user_id = $user->nic;
        $vehicles = vehicles::where('driverId','=',$user_id)->get();


        return view('home')->with($vehicles);
        //return view('dash/userDash');
    }
    public function store(Request $request)
    {
        $request->validate([
            'regNum'=>['required','string','max:8','min:5'],
            'manufac'=>['required'],
            'model'=>['required'],
            'color'=>['required'],
            'insPNo'=>['required'],
            'insProvider'=>['required'],
            'driverId'=>['required']
        ]);
        $vehicle = new vehicles;
        $vehicle->regNum = $request->regNum;
        $vehicle->manufac = $request->manufac;
        $vehicle->model = $request->model;
        $vehicle->color = $request->color;
        $vehicle->insPNo = $request->insPNo;
        $vehicle->insProvider = $request->insProvider;
        $vehicle->driverId = $request->driverId;
        $vehicle->save();

        return redirect('/');
    }
}
