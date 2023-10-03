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
}
