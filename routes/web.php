<?php

use App\Http\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('buku', BukuController::class);

Route::get('/anggota', function (){
    return view('anggota', [
        "title" => 'Anggota'
    ]);
});

Route::get('/admin', function (){
    return view('admin' , [
        "title" => 'Admin'
    ]);
});

Route::get('/peminjaman', function (){
    return view('peminjaman' , [
        "title" => 'Peminjaman'
    ]);
});

Route::get('/history', function (){
    return view('history' , [
        "title" => 'History'
    ]);
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/create', [BookController::class, 'create'])->name('create');

Route::post('/insertdata', [BookController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{$id}', [BookController::class, 'tampilkandata'])->name('tampilkandata');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/registrasi', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [RegisterController::class, 'store']);

Route::resource('/category', AdminCategoryController::class)->except('show')->middleware('auth');
