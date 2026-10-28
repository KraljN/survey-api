<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SurveyController;

Route::middleware('throttle:api')->group(function(){
    Route::controller(SurveyController::class)->group(function(){
        Route::name('surveys.')->group(function(){
            Route::get('/notifications', 'sendNotification')->name('notification');

            Route::get('/surveys', 'index')->name('index');
            Route::get('/surveys/{survey:question_status_id}', 'show')->name('show');
            Route::post('/surveys', 'store')->name('store');
        });
    });
});
