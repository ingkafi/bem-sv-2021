<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', function () {
    return view('/main/index');
});
Route::get('/informasi', function () {
    return view('/main/informasi');
});
Route::get('/proker', function () {
    return view('/main/proker');
});
Route::get('/profil', function () {
    return view('/main/profil');
});
Route::get('/login', function () {
    return view('/main/login');
});

Route::get('/admin/dashboard', [PagesController::class, 'admin'])->name('admin');
Route::get('/admin/kelola/info', [PagesController::class, 'info'])->name('info');
Route::get('/admin/kelola/tampilan', [PagesController::class, 'tampilan'])->name('tampilan');

//USER
Route::get('/admin/kelola/user', [PagesController::class, 'user'])->name('user');
Route::get('/admin/kelola/user/create', [PagesController::class, 'createuser'])->name('createuser');
Route::get('/admin/kelola/user/delete', [PagesController::class, 'deleteuser'])->name('deleteuser');
Route::get('/admin/kelola/user/edit', [PagesController::class, 'edituser'])->name('edituser');

//info
Route::get('/admin/kelola/info', [PagesController::class, 'info'])->name('info');
Route::get('/admin/kelola/info/create', [PagesController::class, 'createinfo'])->name('createinfo');
Route::get('/admin/kelola/info/delete', [PagesController::class, 'deleteinfo'])->name('deleteinfo');
Route::get('/admin/kelola/info/edit', [PagesController::class, 'editinfo'])->name('editinfo');

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