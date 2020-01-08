<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        $data = array([
            'vehicles'=>$vehicles,
            'user'=>$user,
        ]);

        //return $data;
        return view('home')->with($data);

    }
    public function vehicleStore(Request $request)
    {
        $request->validate([
            'regNum'=>['required','string','max:8','min:5'],
            'manufac'=>['required'],
            'model'=>['required'],
            'color'=>['required'],
            'insPNo'=>['required'],
            'insProvider'=>['required'],
        ]);
        $vehicle = new vehicles;
        $vehicle->regNum = $request->regNum;
        $vehicle->manufac = $request->manufac;
        $vehicle->model = $request->model;
        $vehicle->color = $request->color;
        $vehicle->insPNo = $request->insPNo;
        $vehicle->insProvider = $request->insProvider;
        $vehicle->driverId = Auth::user()->nic;
        $vehicle->save();

        return $vehicle;
    }
    public function vehicleUpdate(Request $request, $id)
    {
        $request->validate([
            'regNum'=>['required','string','max:8','min:5'],
            'manufac'=>['required'],
            'model'=>['required'],
            'color'=>['required'],
            'insPNo'=>['required'],
            'insProvider'=>['required'],
        ]);

        DB::table('vehicles')
            ->where('$regNum', '=',$id)
            ->update([
                'regNum' => $request->regNum,
                'manufac' =>$request->manufac,
                'model' => $request->model,
                'color' => $request->color,
                'insPNo' => $request->insPNo,
                'insProvider' => $request->insProvider,
            ]);
    }
    public function userDataUpdate(Request $request){

        $request->validate([
            'fName' => ['required', 'string', 'max:255'],
            'lName' => ['required', 'string', 'max:255'],
            'address'=>['required','string','max:255'],
            'dob'=>['required','date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nic' => ['required', 'string', 'max:255'],
            'dln' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'max:10','min:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        DB::table('users')
            ->where('nic','=',Auth::user()->nic)
            ->update([
                'fName' => $request['fName'],
                'lName' => $request['lName'],
                'address'=>$request['address'],
                'dob'=>$request['dob'],
                'nic' => $request['nic'],
                'dln'=>$request['dln'],
                'phone'=>$$request['mobile'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
        return $request;
    }
}
