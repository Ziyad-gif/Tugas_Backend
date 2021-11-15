<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;
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


Route::get("/patiens",[PatientController::class,'index']);

Route::post("/patiens",[PatientController::class,'store']);

Route::get("/patiens/{id}",[PatientController::class,'show']);

Route::put("/patiens/{id}",[PatientController::class,'update']);
Route::delete("/patiens/{id}",[PatientController::class,'destroy']);
Route::get("/patiens/status/positive",[PatientController::class,'positive']);
Route::get("/patiens/status/recovered",[PatientController::class,'recovered']);
Route::get("/patiens/status/dead",[PatientController::class,'dead']);

