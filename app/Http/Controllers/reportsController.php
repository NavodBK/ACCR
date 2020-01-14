<?php

namespace App\Http\Controllers;
use App\fileUpload;
use App\report;
use App\vehicles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reportsController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lat'=>'required',
            'lon'=>'required'
        ]);

        $report = new report;
        $report->regNum = $request->regNum;
        $report->dnt = $request->dnt;
        $report->type = $request->type;
        $report->injured = $request->injured;
        $report->death = $request->death;
        $report->numOfVehicles = $request->numOfVehicles;
        $report->info = $request->info;
        $report->lat = $request->lat;
        $report->lon = $request->lon;
        $report->severity = 1;
        $report->driverId = $request->driverId;
        $report->confirm = false;

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img/report'), $imageName);

        $report->url =$imageName;
        $report->save();

        return redirect(route('home'));
    }




    public function destroy(Request $id) {

        report::destroy($id->id);
        return redirect(route('home'));
    }
}
