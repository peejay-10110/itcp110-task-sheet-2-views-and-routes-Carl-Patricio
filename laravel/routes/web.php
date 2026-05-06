<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/projects/{id}', [PortfolioController::class, 'projectShow'])->name('projects.show');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');
Route::get('/education', [PortfolioController::class, 'education'])->name('education');
Route::get('/blog', [PortfolioController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PortfolioController::class, 'blogShow'])->name('blog.show');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [PortfolioController::class, 'contactSend'])->name('contact.send');
