<?php

use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TampilanController;

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

Route::get('/', [PagesController::class, 'home']);

Route::get('/informasi', function () {
    return view('/main/informasi');
});
Route::get('/proker', function () {
    return view('/main/proker');
});
Route::get('/profil', function () {
    return view('/main/profil');
});

// //login
// Route::get('/login', function () {
//     return view('/main/login');
// });
// Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', [PagesController::class, 'admin'])->name('dashboard');
    Route::get('/admin/kelola/info', [PagesController::class, 'info'])->name('info');
    Route::get('/admin/kelola/tampilan', [PagesController::class, 'tampilan'])->name('tampilan');

    //Tampilan
    Route::get('/admin/kelola/tampilan', [TampilanController::class, 'index'])->name('indextampilan');
    Route::patch('/admin/kelola/tampilan/update', [TampilanController::class, 'update'])->name('update');

    //USER
    Route::get('/admin/kelola/user', [UserController::class, 'index'])->name('index');
    Route::get('/admin/kelola/user/create', [UserController::class, 'create'])->name('create');
    Route::patch('/admin/kelola/user/create', [UserController::class, 'store'])->name('store');
    Route::get('/admin/kelola/user/{user}/delete', [UserController::class, 'delete'])->name('delete');
    Route::get('/admin/kelola/user/{user}/reset', [UserController::class, 'reset'])->name('reset');
    Route::get('/admin/kelola/user/{user}/edit', [UserController::class, 'edit'])->name('edit');
    Route::patch('/admin/kelola/user/{user}/edit', [UserController::class, 'update'])->name('update');

    //info
    Route::get('/admin/kelola/info', [InfoController::class, 'index'])->name('index');
    Route::get('/admin/kelola/info/create', [InfoController::class, 'create'])->name('create');
    Route::get('/admin/kelola/info/{info}/show', [InfoController::class, 'show'])->name('show');
    Route::patch('/admin/kelola/info/create', [InfoController::class, 'store'])->name('store');
    Route::get('/admin/kelola/info/{info}/delete', [InfoController::class, 'delete'])->name('delete');
    Route::get('/admin/kelola/info/{info}/edit', [InfoController::class, 'edit'])->name('edit');
    Route::patch('/admin/kelola/info/{info}/edit', [InfoController::class, 'update'])->name('update');


    //Aspirasi
    Route::get('/admin/bem/aspirasi', [PagesController::class, 'aspirasi'])->name('aspirasi');

    //PROGRAM
    Route::get('/admin/bem/program', [PagesController::class, 'program'])->name('program');
    Route::get('/admin/bem/program/create', [PagesController::class, 'createprogram'])->name('createprogram');
    Route::get('/admin/bem/program/delete', [PagesController::class, 'deleteprogram'])->name('deleteprogram');
    Route::get('/admin/bem/program/edit', [PagesController::class, 'editprogram'])->name('editprogram');

    //struktur
    Route::get('/admin/bem/struktur', [PagesController::class, 'struktur'])->name('struktur');
    Route::get('/admin/bem/struktur/create', [PagesController::class, 'createstruktur'])->name('createstruktur');
    Route::get('/admin/bem/struktur/delete', [PagesController::class, 'deletestruktur'])->name('deletestruktur');
    Route::get('/admin/bem/struktur/edit', [PagesController::class, 'editstruktur'])->name('editstruktur');

    //survei
    Route::get('/admin/statistik/survei', [PagesController::class, 'survei'])->name('survei');
    Route::get('/admin/statistik/survei/create', [PagesController::class, 'createsurvei'])->name('createsurvei');
    Route::get('/admin/statistik/survei/delete', [PagesController::class, 'deletesurvei'])->name('deletesurvei');
    Route::get('/admin/statistik/survei/edit', [PagesController::class, 'editsurvei'])->name('editsurvei');

    Route::get('/admin/bem', [PagesController::class, 'admin'])->name('admin');
    Route::get('/admin/statistik', [PagesController::class, 'admin'])->name('admin');
    Route::get('/admin/profil', [PagesController::class, 'admin'])->name('admin');
});
require __DIR__ . '/auth.php';
