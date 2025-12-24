<?php

use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Route;


Route::get('/my-token/{id}', [TokenController::class, 'trackToken'])->name('token.track');
Route::get('/display', [TokenController::class, 'showDisplay'])->name('display.index');
Route::get('/counter', [TokenController::class, 'showCounter'])->name('counter.index');
Route::post('/call-next', [TokenController::class, 'callNext'])->name('call.next');
Route::get('/', [TokenController::class, 'showKiosk']);
Route::post('/issue-token', [TokenController::class, 'issueToken'])->name('issue.token');
Route::get('/admin-dashboard', function () {
    return view('dashboard');
})->name('admin.dashboard');

