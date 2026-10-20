<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/review-brief', [HomeController::class, 'submitBrief'])
    ->middleware('throttle:12,1')
    ->name('review-brief.store');
