<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RouteController::class, 'index'])->name('home');

Route::get('/formations/list', [RouteController::class, 'formations'])->name('formations');
Route::get('/formation/{id}', [RouteController::class, 'formationShow'])->name('formation.show');
Route::get('/about', [RouteController::class, 'about'])->name('about');
Route::get('/services/list', [RouteController::class, 'services'])->name('services');
Route::get('/contact', [RouteController::class, 'contacts'])->name('contacts');
Route::post('/contact', [RouteController::class, 'message'])->name('message');

Route::post('/formations/inscription', [RouteController::class, 'inscription'])->name('formations.inscription');
