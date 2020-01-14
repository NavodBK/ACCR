<?php

namespace App\Http\Controllers;

use App\report;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index(){
        $reports = report::all();
        Mapper::map(7.8731,80.7718,['marker' => false,'zoom' => 8]);
        foreach ($reports as $report) {
            if ($report->confirm == true) {
                $regNum=$report->regNum;
                $type = $report->type;
                $reportId = $report->id;
                if ($report->severity == 1) {
                    Mapper::informationWindow($report->lat, $report->lon,$regNum.' '.$type, ['icon' => "http://maps.google.com/mapfiles/ms/icons/green-dot.png"]);
                } elseif ($report->severity == 2) {
                    Mapper::informationWindow($report->lat, $report->lon,$regNum.' '.$type, ['icon' => "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"]);
                } else {
                    Mapper::informationWindow($report->lat, $report->lon,$regNum.' '.$type, ['icon' => "http://maps.google.com/mapfiles/ms/icons/red-dot.png"]);
                }
//            Mapper::informationWindow($report->lat, $report->lon, $report->info);
//            Mapper::marker($report->lat, $report->lon);
            }
        }
        return view('welcome');
    }

}
