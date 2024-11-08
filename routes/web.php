<?php

// use App\Http\Controllers\AuthConreoller;

use App\Http\Controllers\dashbaordController;
use App\Http\Controllers\userController;
use GuzzleHttp\Middleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',[AuthConreoller::class,'login']);
// // Route::get('login', [AuthConreoller::class, 'login'])->name('login');
// Route::post('login',[AuthConreoller::class,'Authlogin']);
// Route::get('logout',[AuthConreoller::class,'logout']);


Route::get('register',[userController::class,"register"]);
Route::post('register',[userController::class,"registerRequest"]);


Route::get('login',[userController::class,"login"])->name('login');
Route::post('login',[userController::class,"loginRequest"]);


// Route::get('admin/dashbaord', function () {
//     return view('admin.dashbaord');
// });

Route::get('admin/dashbaord',[dashbaordController::class,'dashbaord'])->middleware('auth');
Route::get('admin/admin/list',[dashbaordController::class,'list'])->middleware('auth');

// Route::get('admin/admin/list', function () {
//     return view('admin.admin.list');
// });
