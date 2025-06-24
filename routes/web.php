<?php

use App\Livewire\LoginForm;
use App\Livewire\ProductFilter;
use Illuminate\Support\Facades\Route;

Route::get('/', LoginForm::class)->name('home');
Route::get('/login', LoginForm::class)->name('login');
Route::post('/logout', LoginForm::class)->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/produtos', ProductFilter::class)->name('produtos');
});
