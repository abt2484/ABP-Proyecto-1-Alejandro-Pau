<?php

use App\Http\Controllers\CenterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form/',[CenterController::class, 'create']);
Route::post('/store/',[CenterController::class, 'store'])->name('store');