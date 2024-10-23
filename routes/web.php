<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::resource('posts', PostController::class);
Route::get('/space', [PagesController::class, 'getSpace']);
Route::get('/contactus', [PagesController::class, 'getContactus']);
Route::get('/about', [PagesController::class, 'getAbout']);
Route::get('/welcome', [PagesController::class, 'getWelcome']);
