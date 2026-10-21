<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SurveyController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->name('v1.')->group(base_path('routes/api/v1.php'));

//Route::get('/notifications',[SurveyController::class, 'sendNotification'])->name('notification');
//
//Route::get('/surveys', [SurveyController::class, 'index'])->name('surveys.index');
//Route::get('/surveys/{survey}', [SurveyController::class, 'show'])->name('surveys.show');
//Route::post('/surveys', [SurveyController::class, 'store'])->name('surveys.store');
