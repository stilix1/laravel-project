<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PromoPageController;
use Illuminate\Support\Facades\Route;

// Основные разделы
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contacts'])->name('contacts');
Route::get('/feedback', [FeedbackController::class, 'feedback'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'submit'])->name('feedback.submit');


// Route::get('/profile/{username}', 'ProfileController@show')->name('profile.show');


// Авторизация
// Маршрут для страницы входа
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Маршрут для страницы регистрации
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Промо Страницы
// Маршрут для отображения списка всех промо-страниц
Route::get('/promo_pages', [PromoPageController::class, 'index'])->name('promo_pages.index');

// Маршрут для отображения формы создания новой промо-страницы
Route::get('/promo_pages/create', [PromoPageController::class, 'create'])->name('promo_pages.create');

// Маршрут для сохранения данных новой промо-страницы
Route::post('/promo_pages', [PromoPageController::class, 'store'])->name('promo_pages.store');

// Отображение новой промо-страницы
Route::get('/promo_pages/{id}', [PromoPageController::class, 'show'])->name('promo_pages.show');

// Маршрут для отображения формы редактирования промо-страницы
Route::get('/promo_pages/{id}/edit', [PromoPageController::class, 'edit'])->name('promo_pages.edit');

// Маршрут для обновления данных промо-страницы
Route::put('/promo_pages/{id}', [PromoPageController::class, 'update'])->name('promo_pages.update');

// Маршрут для удаления промо-страницы
Route::delete('/promo_pages/{promo_page}/edit', [PromoPageController::class, 'destroy'])->name('promo_pages.destroy');


