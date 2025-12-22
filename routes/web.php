<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RouteController::class, 'index'])->name('home');

Route::get('/formations', [RouteController::class, 'formation'])->name('formations');
Route::get('/about', [RouteController::class, 'about'])->name('about');
Route::get('/galeries', [RouteController::class, 'galerie'])->name('galeries');
Route::get('/contact', [RouteController::class, 'contacts'])->name('contacts');
Route::post('/contact', [RouteController::class, 'contact'])->name('contact');

