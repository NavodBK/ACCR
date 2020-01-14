<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicles;
use App\report;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
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
        $vehicles = (object)vehicles::where('driverId','=',$user_id)->get();
        $reports = (object)report::where('driverId','=',$user_id)->get();

        //return $data;
        return view('home')->with('vehicles',$vehicles)->with('user',$user)->with('vehicles',$vehicles)->with('reports',$reports);

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

        $did = Auth::user()->nic;
        $vehicle = new vehicles;
        $vehicle->regNum = $request->regNum;
        $vehicle->model = $request->model;
        $vehicle->type = $request->type;
        $vehicle->manufac = $request->manufac;
        $vehicle->color = $request->color;
        $vehicle->insPNo = $request->insPNo;
        $vehicle->insProvider = $request->insProvider;
        $vehicle->driverId = $did;
        $vehicle->save();

        return redirect(route('home'));
    }
    public function vehicleUpdate(Request $request)
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
            ->where('regNum',$request->regNum)
            ->update([
                'regNum' => $request->regNum,
                'manufac' =>$request->manufac,
                'type' =>$request->type,
                'model' => $request->model,
                'color' => $request->color,
                'insPNo' => $request->insPNo,
                'insProvider' => $request->insProvider,
            ]);
        return redirect(route('home'));
    }
    public function vehicleDelete(Request $request){
        $vehicle = vehicles::find($request->id);
        $vehicle->delete();
        return redirect(route('home'));
        //return $id;
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


        $userNic = Auth::user()->id;
        $user = App\User::find($userNic);
        $user ->fName = $request['fName'];
        $user->lName = $request['lName'];
        $user->address=$request['address'];
        $user->dob=$request['dob'];
        $user->nic=$request['nic'];
        $user->dln=$request['dln'];
        $user->phone=$request['phone'];
        $user->email=$request['email'];
        $user->save();

        return redirect(route('home'));

    }


}
