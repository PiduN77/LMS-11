<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/teacher-dashboard', [App\Http\Controllers\TeacherController::class, 'index'])->name('TeacherDashboard');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('Admin');
Route::get('/admin/{class}-table', [App\Http\Controllers\AdminController::class, 'datatable'])->name('AdminTable');
