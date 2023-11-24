<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\Nomenclatureler;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SexController;
use App\Http\Controllers\WarehouseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});

Route::prefix('brand')->group(function() {
    Route::get('/', [BrandController::class, 'index']);
});

Route::prefix('employee')->group(function() {
    Route::get('/', [EmployeeController::class, 'index']);
});

Route::prefix('logbook')->group(function() {
    Route::get('/', [LogbookController::class, 'index']);
});

Route::prefix('nomenclature')->group(function() {
    Route::get('/', [NomenclatureController::class, 'index']);
});

Route::prefix('posts')->group(function() {
    Route::get('/', [PostsController::class, 'index']);
});

Route::prefix('sex')->group(function() {
    Route::get('/', [SexController::class, 'index']);
});

Route::prefix('warehouse')->group(function() {
    Route::get('/', [WarehouseController::class, 'index']);
});