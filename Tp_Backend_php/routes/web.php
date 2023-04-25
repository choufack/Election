<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use Illuminate\Http\Request;

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
Route::get ('/token',function(Request $request){
    $token = $request->session()->token();
    $token = csrf_token();
});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get("/region-create", 'RegionController@index')->name("region.index");
    Route::get("/region-liste", 'RegionController@create')->name("region.create");
    
    Route::post("/region-create", 'RegionController@save')->name("region.save");
    Route::get("/region-delete/{id}", 'RegionController@destroy')->name("region.destroy");
    Route::get("/form-update-region/{id}", 'RegionController@edit')->name("region.edit");
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get("/participant-create", 'ParticipantController@create')->name("participant.create");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
