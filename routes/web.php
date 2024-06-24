<?php

use Illuminate\Support\Facades\Route;

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

//added college
// Route::get('college/import',[])
Route::get('college/import',[App\Http\Controllers\CollegeController::class, 'index']);
Route::post('college/import',[App\Http\Controllers\CollegeController::class, 'importExcelData']);


Route::get('/', function () {
    return view('welcome');
});
