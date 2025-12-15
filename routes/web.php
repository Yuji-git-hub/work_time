<?php

use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/subjects')->group(function () {
    Route::get('/create', [SubjectController::class, 'create'])->name('subjects.create');
    Route::get('', [SubjectController::class, 'index'])->name('subjects.index');
    Route::post('', [SubjectController::class, 'store'])->name('subjects.store');
    Route::get('/{subject}', [SubjectController::class, 'show'])->name(('subjects.show'));
    Route::get('/{subject}/edit', [SubjectController::class, 'edit'])->name('subjects.edit');
    Route::put('/{subject}', [SubjectController::class, 'update'])->name('subjects.update');
    Route::delete('/{subject}', [SubjectController::class, 'destroy'])->name('subjects.destroy');
});


