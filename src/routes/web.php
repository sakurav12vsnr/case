<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TimestampController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
    Route::post('/clockIn', [TimestampController::class, 'clockIn'])->name('clockIn');
    Route::post('/clockOut', [TimestampController::class, 'clockOut'])->name('clockOut');
    Route::post('/breakStart', [TimestampController::class, 'breakStart'])->name('breakStart');
    Route::post('/breakEnd', [TimestampController::class, 'breakEnd'])->name('breakEnd');
    Route::get('/attendance', [AttendanceController::class, 'show']);
});

