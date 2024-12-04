<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// Основные разделы
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
Route::get('/about', [HomeController::class, 'about'])->name('about');


Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::post('/feedback', [ContactController::class, 'submit'])->name('feedback.submit');


Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('project.show');


Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');


// Маршрут для страницы входа
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Маршрут для страницы регистрации
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

