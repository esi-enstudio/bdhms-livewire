<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');

    Route::prefix('user')->name('user.')->group(function (){
        Route::get('/all-users', \App\Livewire\User\Index::class)->name('index');
        Route::get('/create', \App\Livewire\User\Create::class)->name('create');
    });
});


