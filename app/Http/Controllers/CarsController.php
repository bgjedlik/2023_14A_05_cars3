<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{
    public function index(){
        //echo 'ok';
        $cars = DB::table('cars3')->get();
       // dd($cars);

        return view('cars.index',[
            'cars'=>$cars
        ]);
    }

    public function search(Request $request){
       // echo 'OK';
       //dd($request->name);
       $cars=[];

       if (isset($request->name)){
           $cars = DB::table('cars3')
            ->where('title','Like','%'.$request->name.'%')
            ->get();
       }


        //dd($cars);
       return view('cars.search',[
        'cars' => $cars,
        'name' => $request->name
       ]);
    }

    public function year(){
        $years = DB::table('cars3')
            ->select('start_production')
            ->distinct()
            ->get();
            //dd($years[0]->start_production);
        return view('cars.year',[
            'years' => $years
        ]);
    }
    public function searchYear(Request $request){
        $years = DB::table('cars3')
        ->select('start_production')
        ->distinct()
        ->get();
        //dd($years[0]->start_production);
        //dd($request);
    return view('cars.year',[
        'years' => $years
    ]);
    }
}
