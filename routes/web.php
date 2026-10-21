<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function (){
    return 'hello world';
});

Route::get('/cao', [TestController::class, 'testFunction']);

