<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use DB;
use App\Produits;

class ChartController extends Controller
{
    public function index()
    {
        $chart = Charts::database(Produits::all(), 'bar', 'highcharts')
        ->elementLabel("Total")
        ->dimensions(1000, 500)
        ->responsive(false)
        ->groupBy('name');

        $chart1 = Charts::database(Produits::all(), 'pie', 'highcharts')
        ->elementLabel("Total")
        ->title("pie")
        ->dimensions(1000, 500)
        ->responsive(false)
        ->groupBy('name');

        $chart2 = Charts::database(Produits::all(), 'dunot', 'highcharts')
        ->elementLabel("Total")
        ->dimensions(1000, 500)
        ->responsive(false)
        ->groupBy('name');

        $chart3 = Charts::database(Produits::all(), 'line', 'highcharts')
        ->elementLabel("Total")
        ->dimensions(1000, 500)
        ->responsive(false)
        ->groupBy('name');

        $chart4 = Charts::database(Produits::all(), 'area', 'highcharts')
        ->elementLabel("Total")
        ->dimensions(1000, 500)
        ->responsive(false)
        ->groupBy('name');

        $chart5=Charts::create('pie', 'highcharts')
  ->title('My nice chart')
  ->labels(['First', 'Second', 'Third'])
  ->values([5,10,20])
  ->dimensions(1000,500)
  ->responsive(false);

  $chart6 = Charts::create('donut', 'highcharts')
  ->title('My nice chart')
  ->labels(['First', 'Second', 'Third'])
  ->values([5,10,20])
  ->dimensions(1000,500)
  ->responsive(false);

        return view ('chart',compact('chart','chart1','chart2','chart3','chart4','chart5','chart6'));
    }
}
