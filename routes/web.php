<?php

use App\Http\Controllers\PerumahanController;
use App\Http\Controllers\PostController;
use App\Models\perumahan;
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
Route::resource('post',PostController::class);
Route::resource('/perumahan',PerumahanController::class);
Route::resource('/form', PerumahanController::class);

Route::get('/', function () {
    return view('layout');
});
Route::get('/agib', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('tampil',[
        'asal'=>'bulan',
        'dimensi'=>'isekai'
    ]);
});
