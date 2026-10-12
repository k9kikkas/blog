<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/buttons', [PublicController::class, 'buttons'])->name('buttons');
Route::get ('/post/{post}', [PublicController::class, 'post'])->name('post');
