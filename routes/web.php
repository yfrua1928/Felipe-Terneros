<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\AdvanceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GenericController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventaryController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', HomeController::class);
Route::resource('Accounting', AccountingController::class);
Route::resource('Advance', AdvanceController::class);
Route::resource('Client', ClientController::class);
Route::resource('Generic', GenericController::class);
Route::resource('Inventary', InventaryController::class);
Route::resource('Portfolio', PortfolioController::class);
Route::resource('Purchase', PurchaseController::class);
Route::resource('Rank', RankController::class);
Route::resource('Sale', SaleController::class);
Route::resource('User', UserController::class);