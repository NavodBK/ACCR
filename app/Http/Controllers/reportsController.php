<?php

namespace App\Http\Controllers;
use App\report;
use Illuminate\Http\Request;

class reportsController extends Controller
{

    public function store(Request $request){
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
        $report->severity = $request->lon;
        $report->driverId = $request->driverId;
        $report->save();
        return redirect(route('home'));
    }

    public function destroy(Request $id) {

        report::destroy($id->id);
        return redirect(route('home'));
    }
}
