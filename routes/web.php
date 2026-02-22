<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReceiptController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

/* ReceiptController */
Route::get('/receipt/index', [ReceiptController::class, 'index'])->name('receipt.index')->middleware('auth');
Route::get('/receipt/create', [ReceiptController::class, 'create'])->name('receipt.create')->middleware('auth');
