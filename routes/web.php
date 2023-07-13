<?php

use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SubCriteriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')
    ->group(function () {
        Route::get('/dashboard', DashboardController::class)->name('dashboard');
        Route::resource('hospitals', HospitalController::class)->except('show');
        Route::resource('criterias', CriteriaController::class)->except('show');
        Route::resource('sub_criterias', SubCriteriaController::class)->except('show');
        Route::resource('alternatives', AlternativeController::class)->except('show');
        Route::get('/result', [ResultController::class, 'index'])->name('result.index');
    });