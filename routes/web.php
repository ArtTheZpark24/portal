<?php

use App\Http\Controllers\AdminController;
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



Route::middleware(['auth'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::post('/admin/dashboard', [AdminController::class, 'logout'])->name('admin.logout');
});



