<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RulesController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\RemindersController;

// Public
Route::get('/', [HomeController::class, 'index']);
Route::get('/rules', [RulesController::class, 'index']);
Route::get('/members', [MembersController::class, 'index']);
Route::get('/reminders', [RemindersController::class, 'index']);



Route::get('/members', [MembersController::class, 'index']);
Route::post('/members/{id}/avatar', [MembersController::class, 'uploadAvatar'])->name('members.avatar');
Route::get('/members', [MembersController::class, 'index'])->name('members.index');
