<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterdUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\JobController;
use App\Models\Tag;

Route::get('/', [\App\Http\Controllers\JobController::class, 'index'])->name('home');
Route::get('/search',SearchController::class);

Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');


Route::get('/tags/{tag:name}',TagController::class);


Route::middleware('guest')->group(function(){
    Route::get('/register', [RegisterdUserController::class, 'create']);
    Route::post('/register', [RegisterdUserController::class, 'store']);


    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);

});
Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');


