<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IsplateController;
use App\Http\Controllers\OpcineController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\UserController;
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


// Route::get('/{name}/transparentnost/{queryParam}', [IsplateController::class, 'queryEntries']);

Route::get('/{name}/transparentnost', [IsplateController::class, 'showEntries']);
Route::get('/isplate', [IsplateController::class, 'index']);
Route::get('/opcine/all', [OpcineController::class, 'index']);


///images
//For adding an image
Route::get('/add-image', [App\Http\Controllers\ImageUploadController::class, 'addImage'])->name('images.add');
//For storing an image
Route::post('/store-image', [App\Http\Controllers\ImageUploadController::class, 'storeImage']);
//For showing an image
//Route::get('/view-images',[App\Http\Controllers\ImageUploadController::class,'viewImages'])->name('images.view'); TODO ::: move to web.php
///images
