<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ForgotPasswordController;
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

Route::post('/', [AdminController::class, 'login'])->name('login');
Route::get('/', [AdminController::class, 'index'] );
Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPass'])->name('forgot.password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassPost'])
->middleware('guest')->name('forgot.password.post');

Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');


Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])
->middleware('guest')
->name('password.update');




Route::middleware(['auth'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::post('/admin/dashboard', [AdminController::class, 'logout'])->name('admin.logout');
});



