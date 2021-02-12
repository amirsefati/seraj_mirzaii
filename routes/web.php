<?php

use App\Http\Controllers\Register;
use Illuminate\Support\Facades\Route;

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


Route::post('/api/send_data_state3',[Register::class,'register_state3']);
Route::post('/api/send_data_state2',[Register::class,'register_state2']);
Route::post('/api/send_data_state1',[Register::class,'register_state1']);

Route::get('/alireza',[Register::class,'showall']);

