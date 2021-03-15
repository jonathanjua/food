<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('admin/plans', [PlanController::class, 'index'])->name('plans.index');

