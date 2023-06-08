<?php
namespace App\Http\Controllers;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    echo "Selamat datang di laravel";
});

Route::get('/greeting', function () {
    return view('greeting');
});

Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/mobil/create',[MobilController::class,'create']);
Route::post('/mobil/simpanData', [MobilController::class, 'store']);
Route::get('/merk',[MerkController::class,'index']);
Route::get('/merk/create',[MerkController::class, 'create']);
Route::post('/merk/simpan-data',[MerkController::class, 'store']);
