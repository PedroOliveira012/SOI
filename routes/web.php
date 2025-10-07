<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/new-project', [App\Http\Controllers\ProjectController::class, 'index'])->name('new-project');
Route::post('/store-projects', [App\Http\Controllers\ProjectController::class, 'store'])->name('store-project');
