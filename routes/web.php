<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReceiptController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

/* ReceiptController */
Route::get('/receipt/index', [ReceiptController::class, 'index'])->name('receipt.index');
Route::get('/receipt/create', [ReceiptController::class, 'create'])->name('receipt.create')->middleware('auth');
Route::post('/receipt/store', [ReceiptController::class, 'store'])->name('receipt.store')->middleware('auth');
Route::get('/receipt/show/{receipt}', [ReceiptController::class, 'show'])->name('receipt.show');