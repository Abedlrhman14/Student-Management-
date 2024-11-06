<?php

use App\Http\Controllers\AuthConreoller;
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

Route::get('/',[AuthConreoller::class,'login']);
// Route::get('login', [AuthConreoller::class, 'login'])->name('login');
Route::post('login',[AuthConreoller::class,'Authlogin']);
Route::get('logout',[AuthConreoller::class,'logout']);



Route::get('admin/dashbaord', function () {
    return view('admin.dashbaord');
});


Route::get('admin/admin/list', function () {
    return view('admin.admin.list');
});
