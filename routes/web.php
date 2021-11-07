<?php

use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

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
    return view('home', 
        [
            "active_home" => "active",
            "active_team" => "",
            "active_player" => ""
        ]
    );
});
Route::resource('team', TeamController::class);
Route::resource('player', PlayerController::class);

