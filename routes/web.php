<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('contacts', App\Http\Controllers\ContactController::class);
Route::resource('companies', App\Http\Controllers\CompanyController::class);

