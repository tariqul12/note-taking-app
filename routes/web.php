<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    // Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/note/create',[NoteController::class,'create'])->name('note.create');
    Route::post('/note/store',[NoteController::class,'store'])->name('note.store');
    Route::get('/note/edit/{id}',[NoteController::class,'edit'])->name('note.edit');
    Route::post('/note/update/{id}',[NoteController::class,'update'])->name('note.update');
    Route::get('/note/delete/{id}',[NoteController::class,'delete'])->name('note.delete');
});
