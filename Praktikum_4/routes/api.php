<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\animalController;
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

Route::get("\animals",[animalController::class,'index']);
Route::get('/zs', function () {
    echo "memcacheredis";

});
Route::post("\animals",[animalController::class,'store']);
Route::put("\animals\{id}",[animalController::class,'put']);
Route::delete("\animals\{id}",[animalController::class],'destroy');
