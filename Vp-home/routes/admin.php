<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Middleware\AuthLogin;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->as('admin.')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard')->middleware(AuthLogin::class);

    //  <- ** USER ** ->
    Route::prefix('users')->as('users.')->group(function () {
        Route::get('/',              [UserController::class, 'index'])->name('index')->middleware('admin');
        Route::get('create',         [UserController::class, 'create'])->name('create');
        Route::get('store',          [UserController::class, 'store'])->name('store');
        Route::get('show/{id}',      [UserController::class, 'show'])->name('show');
        Route::get('{id}/edit',      [UserController::class, 'edit'])->name('edit');
        Route::get('{id}/update',    [UserController::class, 'update'])->name('update');
        Route::get('{id}/destroy',   [UserController::class, 'destroy'])->name('destroy');
    });

    //  <- ** CATEGORY ** ->
    Route::resource('categories',   CategoryController::class);
});
