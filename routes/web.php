<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Models\User;



Route::get('/', [UsersController::class, 'index'])->name('admin.users.index');
Route::get('/create', [UsersController::class, 'create'])->name('admin.users.create');
Route::get('/store', [UsersController::class, 'store'])->name('admin.users.store');
// Route::get('/{user}/show', [UsersController::class, 'show'])->name('admin.users.show');
// Route::put('/{user}', [UsersController::class, 'update'])->name('admin.users.update');
// Route::get('/{user}/destroy', [UsersController::class, 'destroy'])->name('admin.users.destroy');
// Route::get('/{userId}/restore', [UsersController::class, 'restore'])->name('admin.users.restore');
// Route::put('/{user}/change-password', [UsersController::class, 'changePassword'])->name('admin.users.changePassword'


