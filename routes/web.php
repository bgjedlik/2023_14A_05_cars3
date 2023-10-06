<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[CarsController::class,'index']);
Route::get('/search',[CarsController::class,'search']);
Route::post('/search',[CarsController::class,'search']);

Route::get('/year',[CarsController::class,'year']);
Route::post('/year',[CarsController::class,'searchYear']);
