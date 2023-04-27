<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\REST\ParticipantController;
use App\Http\Controllers\REST\RegionController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//   return $request->user();
// });
Route::apiResource ("participants", ParticipantController::class);
Route::apiResource ("region", ParticipantController::class);
Route::get("onOff{id}",[ParticipantController::class, "onOff"]);