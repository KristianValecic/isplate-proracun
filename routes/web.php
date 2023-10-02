<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IsplateController;
use App\Http\Controllers\OpcineController;
use App\Http\Controllers\UserController;

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


Route::get('/{rkpid}/transparentnost', [UserController::class, 'showEntries']);
Route::get('/isplate', [IsplateController::class, 'index']);
Route::get('/opcine/all', [OpcineController::class, 'index']);
