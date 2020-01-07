<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class vehiclesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $user_id = $user->nic;
        $vehicles = vehicles::where('driverId','=',$user_id)->get();
        return ($vehicles);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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
        $vehicle = new \App\Http\Controllers\vehicles;
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $regNum)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
