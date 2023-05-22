<?php

use App\Http\Controllers\ShowPagesController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ShowPagesController::class, 'showChat']);

Route::get('/livewire', \App\Http\Livewire\UsersList::class);

Route::controller(\App\Http\Controllers\SignController::class)->group(function() {
    Route::get('/signIn', 'signIn');
    Route::get('/signUp', 'signUp')->name('signUp');
    Route::get('/signOut', 'signOut');
    Route::get('/check_user', 'checkUser');
});

Route::controller(VerificationController::class)->group(function (){
    Route::get('/email/verify', [VerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
});

Route::get('/test', [\App\Http\Controllers\TestController::class, 'index']);
