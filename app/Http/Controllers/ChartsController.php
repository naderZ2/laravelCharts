<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class ChartsController extends Controller
{

    public function chart(){

        // $user=User::find(1);
        // dd($user);
        $chart_options =[
            'chart_title' =>'Users by day',
            'report_type' =>'group_by_string',
            'model' =>'App\Models\User',
            'group_by_field' =>'color',
            'group_by_period' =>'day',
            'chart_type' =>'bar',
        ];
        $chart1=new LaravelChart($chart_options);

        return view('welcome',compact('chart1'));
    }



}
