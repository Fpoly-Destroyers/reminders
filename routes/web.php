<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\SettingController;
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

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'postRegister'])->name('post.register');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
    Route::post('/forgot-password', [AuthController::class, 'postForgotPassword'])->name('post.forgot-password');
});

Route::group([
    'middleware' => 'auth',
], function () {
    Route::get('/', function () {
        return redirect()->route('reminders.folder', 'today');
    });

    Route::prefix('reminders')->group(function () {
        Route::get('/', function () {
            return redirect()->route('reminders.folder', 'today');
        })->name('reminders.index');

        Route::get('/folder/{slug}', [ReminderController::class, 'folder'])->name('reminders.folder');

        Route::get('/date/{year}/{month}/{day}', [ReminderController::class, 'date'])->name('reminders.date');
    });

    Route::prefix('notes')->group(function () {
        Route::get('/', [NoteController::class, 'index'])->name('notes.index');
    });

    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::post('/settings', [SettingController::class, 'postSettings'])->name('post.settings');

    Route::get('/change-password', [AuthController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [AuthController::class, 'postChangePassword'])->name('post.change-password');
});
