<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Projects
Route::get('/new-project', [App\Http\Controllers\ProjectController::class, 'index'])->name('new-project');
Route::post('/store-projects', [App\Http\Controllers\ProjectController::class, 'store'])->name('store-project');
Route::delete('/delete/{project}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('delete-project');

//Kits
Route::get('/kits-editing/home', [App\Http\Controllers\KitsController::class, 'index'])->name('kits-editing-home');

