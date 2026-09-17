<?php

use App\Http\Controllers\TopupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/topup', function () {
    return view('topup.index');
})->name('topup.index');

Route::post('/topup/process', [TopupController::class, 'process'])
    ->name('topup.process');

Route::get('/topup/success', function () {
    return view('topup.success');
})->name('topup.success');
