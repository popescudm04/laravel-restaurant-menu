<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminController;
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

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [loginController::class, 'login'])->name('login');

Route::post('/addCategory', [adminController::class, 'addCategory'])->name('addCategory');

Route::get('/deleteCategory/{id}',[adminController::class,'deleteCategory'])->name('deleteCategory');

Route::get('/categories', [adminController::class,'getCategory'])->name('categories');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');
