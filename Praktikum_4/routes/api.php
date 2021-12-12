<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransactiosController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/animals",[AnimalController::class,'index']);
Route::get("/an",[animal::class],"index");
Route::post("/animals",[AnimalController::class,'store']);
Route::put("/animals\{id}",[AnimalController::class,'put']);
Route::delete("/animals\{id}",[AnimalController::class,'destroy']);
Route::get("/hello",[StudentController::class,'index']);
Route::get("/hello/{id}",[StudentController::class,'show']);

Route::post("/hello",[StudentController::class,'store']);
Route::put("/hello/{id}",[StudentController::class,'update']);
Route::delete('hello/{id}',[StudentController::class,'destroy']);


Route::get("/transaksi",[TransactiosController::class,'index']);
Route::post("/transaksi",[TransactiosController::class,'store']);
Route::put("/transaksi/{id}",[TransactiosController::class,'update']);
Route::get("/transaksi/{id}",[TransactiosController::class,'show']);
Route::delete("/transaksi/{id}",[TransactiosController::class,'destroy']);


