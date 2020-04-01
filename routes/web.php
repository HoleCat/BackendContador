<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\File;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/auth', function () {
	if(!Auth::check()){
		$user = App\User::find(1);
		Auth::login($user);
	}
    //return Auth::user();
    return response()->json(['Hello Laravel 6']);
});

Route::post('/archivos', function(Request $request){
	try{
		$data = $request->file('myfile')->getClientOriginalName();
		return response()->json($data);
	} catch(\Exception $e) {
		return response()->json(['mensaje'=> 'ERROR']);
	}
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/app', 'HomeController@index')->name('app');

Route::post('/Modulo1Store', 'Modulo1Controller@store');
//Route::post('/ImportExcel', 'Modulo1Controller@import');

Route::match(['get', 'post'], '/ImportExcelCompra', 'MayorcompraController@import');
Route::match(['get', 'post'], '/ImportExcelVenta', 'MayorventaController@import');
Route::match(['get', 'post'], '/ImportExcelGasto', 'MayorgastoController@import');

Route::match(['get', 'post'], '/ExportExcelCompra', 'MayorcompraController@export');
