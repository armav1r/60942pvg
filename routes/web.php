<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditionController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\ReaderController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello World!']);
});


Route::get('/edition', [EditionController::class, 'index']);
Route::get('/edition/{id}', [EditionController::class, 'show']);
Route::get('/copy', [CopyController::class, 'index']);
Route::get('/copy/{id}', [CopyController::class, 'show']);
Route::get('/reader/{id}', [ReaderController::class, 'show']);