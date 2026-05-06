<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('landing'))->name('landing');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::post('/quote', [ContactController::class, 'quote'])->name('contact.quote');
Route::get('/privacy-policy', fn () => view('privacy'))->name('privacy');
