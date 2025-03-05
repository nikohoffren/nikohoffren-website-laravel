<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home page route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Projects page route
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');

// Contact page route
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Language switcher
Route::get('/language/{locale}', [LanguageController::class, 'switchLanguage'])->name('language.switch');

// Theme switcher
Route::get('/language/theme/{theme}', [LanguageController::class, 'switchTheme'])->name('theme.switch');
