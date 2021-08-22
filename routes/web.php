<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{LoginController, AdminController};

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

Route::get("/login", [LoginController::class, "getLogin"]);
Route::post("/login", [LoginController::class, "index"]);
Route::get("/admin", [AdminController::class, "index"])->middleware('CheckLogin');
