<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Route pour la page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/marketing digital', [HomeController::class, 'market'])->name('market');
Route::get('production audiovisuelle', [HomeController::class, 'prod'])->name('product');
Route::get('création des évennements', [HomeController::class, 'creat'])->name('creation');



// Route pour le formulaire de contact
Route::post('/', [HomeController::class, 'sendContact'])->name('send.contact');

// Routes d'authentification
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Routes protégées par le middleware auth
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('articles/create', [ArticleController::class, 'create'])->name('create');
    Route::post('articles', [ArticleController::class, 'store'])->name('store');
    Route::get('articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
});


// Route pour afficher les articles (accessible sans authentification)
Route::get('articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
