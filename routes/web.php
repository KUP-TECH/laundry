<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TableController;
use Laravel\Prompts\Table;

Route::get("/", [LoginController::class,"index"])->name('login');
Route::post('/try', [LoginController::class, "login"])->name('try');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

// Route::get("/dashboard", [DashboardController::class,"index"])->name("dashboard");
Route::middleware(['auth:web'])->group(function (){
    Route::get("/dashboard", [DashboardController::class,"index"])->name("dashboard");
    Route::get("/orders", [OrderController::class,"index"])->name("orders");
    Route::get("/table", [TableController::class,"index"])->name( "table");
});