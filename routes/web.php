<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RektorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VerfikasiController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
})->middleware('auth');

Route::get('login',[AuthController::class, 'login'])->name('login');
Route::Post('login',[AuthController::class,'authenticate']);

Route::middleware('auth')->group(function(){
    Route::get('logout',[AuthController::class, 'logout']);
    Route::get('dashboard',[DashboardController::class,'index'])->middleware(['onlyadmin']);

    Route::get('datauser',[UserController::class,'datauser']);
    Route::post('tambahuser',[UserController::class,'store']);
    Route::get('edituser/{id}',[UserController::class,'edituser'])->name('edituser');
    Route::put('/edituser/{id}',[UserController::class,'updateuser']);
    Route::get('delete-user/{id}',[UserController::class,'delete']);
    Route::get('User-add',[UserController::class,'Useradd']);


    Route::get('tambahsiswa',[SiswaController::class,'siswa']);
    Route::Post('tambah-siswa',[SiswaController::class,'store']);



    Route::get('verifikasi',[VerfikasiController::class, 'index']);
    Route::get('rektor',[RektorController::class,'index'])->middleware(['onlyrektor']);
});
