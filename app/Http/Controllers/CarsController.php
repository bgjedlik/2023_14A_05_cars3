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

        return view('cars.index',['cars'=>$cars]);
    }
}
