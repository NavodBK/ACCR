<?php

namespace App\Http\Controllers;

use App\report;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $jan= DB::table("reports")
            ->whereMonth('dnt', '=', '01')
            ->get();
        $jan =count($jan);

        $feb= DB::table("reports")
            ->whereMonth('dnt', '=', '02')
            ->get();
        $feb =count($feb);

        $mar= DB::table("reports")
            ->whereMonth('dnt', '=', '03')
            ->get();
        $mar =count($mar);

        $ap= DB::table("reports")
            ->whereMonth('dnt', '=', '04')
            ->get();
        $ap =count($ap);

        $may= DB::table("reports")
            ->whereMonth('dnt', '=', '05')
            ->get();
        $may =count($may);

        $june= DB::table("reports")
            ->whereMonth('dnt', '=', '06')
            ->get();
        $june =count($june);

        $accData = array([$jan,$feb,$mar,$ap,$may,$june]);
       // return  $accData;

        $reports = report::all();
//        return $reports;


        Mapper::map(7.8731,80.7718,[ 'center' => true, 'marker' => false]);
        foreach ($reports as $report) {
            if ($report->confirm == true) {
                $regNum=$report->regNum;
                $type = $report->type;
                $reportId = $report->id;
                if ($report->severity == 1) {
                    Mapper::informationWindow($report->lat, $report->lon,'Report Id:'. $reportId.'-  '.$regNum.' '.$type, ['icon' => "http://maps.google.com/mapfiles/ms/icons/green-dot.png"]);
                } elseif ($report->severity == 2) {
                    Mapper::informationWindow($report->lat, $report->lon, 'Report Id:'. $reportId.'-  '.$regNum.' '.$type, ['icon' => "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"]);
                } else {
                    Mapper::informationWindow($report->lat, $report->lon,'Report Id:'. $reportId.'-  '.$regNum.' '.$type, ['icon' => "http://maps.google.com/mapfiles/ms/icons/red-dot.png"]);
                }
//            Mapper::informationWindow($report->lat, $report->lon, $report->info);
//            Mapper::marker($report->lat, $report->lon);
            }
        }
        return view('dash/rdaDash')->with('reports',$reports)->with('accData',$accData);
    }
}
