<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestUserController;
use App\Http\Controllers\studendcontroller;

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

Route::get('/',  [TestUserController::class, 'user'])->name('user');
Route::get('/add',  [TestUserController::class, 'add'])->name('add');
Route::post('/add',  [TestUserController::class, 'store'])->name('store');
Route::get('/edit/{id}',  [TestUserController::class, 'edit'])->name('edit');
Route::post('/update',  [TestUserController::class, 'update'])->name('update.user');
Route::get('/delete/{id}',  [TestUserController::class, 'delete'])->name('delete');

// student

Route::get('student',[studendcontroller::class, 'student'])->name('student');
Route::post('student',[studendcontroller::class, 'student_store'])->name('student-store');


