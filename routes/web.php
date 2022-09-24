<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneratorController;
use App\Http\Controllers\RunningLogController;
use App\Http\Controllers\OilMaintenanceController;
use App\Http\Controllers\OilChangeRecommendationController;

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

Route::controller(GeneratorController::class)->group(function () {

    Route::get('generators/create', 'create');
    Route::post('generators/', 'store');
    Route::get('generators/', 'index');
    Route::get('generators/{generatorId}', 'show');
    Route::get('generators/{generatorId}/edit', 'edit');
    Route::put('generators/{generatorId}', 'update');
    Route::delete('generators/{generatorId}', 'destroy');

});

Route::prefix('generators/{generatorId}')->group(function () {

    Route::controller(RunningLogController::class)->group(function () {
        Route::get('/running-logs/create', 'create');
        Route::post('/running-logs', 'store');
        Route::get('/running-logs', 'index');
        Route::get('/running-logs/{runningLogId}', 'show');
        Route::get('/running-logs/{runningLogId}/edit', 'edit');
        Route::put('running-logs/{runningLogId}', 'update');
        Route::delete('/running-logs/{runningLogId}', 'destroy');
    });

    Route::controller(OilMaintenanceController::class)->group(function () {
        Route::get('/oil-maintenance/create', 'create');
        Route::post('/oil-maintenance', 'store');
        Route::get('/oil-maintenance', 'index');
        Route::get('/oil-maintenance/{oilMaintenanceId}', 'show');
        Route::get('/oil-maintenance/{oilMaintenanceId}/edit', 'edit');
        Route::put('running-logs/{oilMaintenanceId}', 'update');
        Route::delete('/oil-maintenance/{oilMaintenanceId}', 'destroy');
    });

    Route::controller(OilChangeRecommendationController::class)->group(function () {
        Route::get('/oil-change-recommendations/create', 'create');
        Route::post('/oil-change-recommendations', 'store');
        Route::get('/oil-change-recommendations', 'index');
        Route::get('/oil-change-recommendations/{oilChangeRecommendationId}', 'show');
        Route::get('/oil-change-recommendations/{oilChangeRecommendationId}/edit', 'edit');
        Route::put('oil-change-recommendations/{oilChangeRecommendationId}', 'update');
        Route::delete('/oil-change-recommendations/{oilChangeRecommendationId}', 'destroy');
    });
    
});