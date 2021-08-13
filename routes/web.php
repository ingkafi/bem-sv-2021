<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\BuletinController;
use App\Http\Controllers\StrukturStatController;
use App\Http\Controllers\SurveiController;
use App\Http\Controllers\DatabaseController;
use App\Models\User;

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
Route::get('/info', [PagesController::class, 'informasi']);
Route::get('/info/{info}/show', [PagesController::class, 'showinformasi']);
Route::get('/proker', [PagesController::class, 'proker']);
Route::get('/profil/{tahun}', [PagesController::class, 'profil']);
Route::patch('/aspirasi', [AspirasiController::class, 'store']);

//statdiary
Route::get('/statdiary', [PagesController::class, 'homestat']);
Route::get('/statdiary/database', [PagesController::class, 'databasestat']);
Route::get('/statdiary/bicara-data', [PagesController::class, 'datastat']);
Route::get('/statdiary/survey', [PagesController::class, 'surveystat']);
Route::get('/statdiary/{survey}/detailsurvey', [PagesController::class, 'detailsurveystat']);
Route::get('/statdiary/{bicara}/detailbicaradata', [PagesController::class, 'detailbicaradata']);
Route::get('/statdiary/{db}/detaildatabase', [PagesController::class, 'detaildatabase']);



// Route::get('/login', function () {
//     return view('/main/login');
// });
// Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', [PagesController::class, 'admin'])->name('dashboard');
    Route::get('/admin/edit', [PagesController::class, 'editprofil'])->name('editprofil');
    Route::patch('/admin/edit', [PagesController::class, 'updateprofil'])->name('updateprofil');
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
    Route::get('/admin/kelola/info', [InfoController::class, 'index']);
    Route::get('/admin/kelola/info/create', [InfoController::class, 'create']);

    Route::patch('/admin/kelola/info/create', [InfoController::class, 'store']);
    Route::get('/admin/kelola/info/{info}/delete', [InfoController::class, 'delete']);
    Route::get('/admin/kelola/info/{info}/edit', [InfoController::class, 'edit']);
    Route::patch('/admin/kelola/info/{info}/edit', [InfoController::class, 'update']);


    //Aspirasi
    Route::get('/admin/bem/aspirasi', [AspirasiController::class, 'index'])->name('index');

    //PROGRAM
    Route::get('/admin/bem/program', [ProkerController::class, 'index'])->name('index');
    Route::get('/admin/bem/program/create', [ProkerController::class, 'create'])->name('create');
    Route::patch('/admin/bem/program/store', [ProkerController::class, 'store'])->name('store');
    Route::get('/admin/bem/program/{proker}/edit', [ProkerController::class, 'edit'])->name('edit');
    Route::patch('/admin/bem/program/{proker}/update', [ProkerController::class, 'update'])->name('update');
    Route::get('/admin/bem/program/{proker}/delete', [ProkerController::class, 'delete'])->name('delete');

    //struktur
    Route::get('/admin/bem/struktur', [StrukturController::class, 'index'])->name('index');
    Route::get('/admin/bem/struktur/{tahun}', [StrukturController::class, 'detail'])->name('detail');
    Route::get('/admin/bem/struktur/{tahun}/create', [StrukturController::class, 'create'])->name('create');
    Route::patch('/admin/bem/struktur/{tahun}/store', [StrukturController::class, 'store'])->name('store');
    Route::get('/admin/bem/struktur/{struktur}/delete', [StrukturController::class, 'delete'])->name('delete');
    Route::get('/admin/bem/struktur/{struktur}/edit', [StrukturController::class, 'edit'])->name('edit');
    Route::patch('/admin/bem/struktur/{struktur}/update', [StrukturController::class, 'update'])->name('update');

    //struktur
    Route::get('/admin/statistik/struktur', [StrukturStatController::class, 'index'])->name('index');
    Route::get('/admin/statistik/struktur/create', [StrukturStatController::class, 'create'])->name('create');
    Route::patch('/admin/statistik/struktur/store', [StrukturStatController::class, 'store'])->name('store');
    Route::get('/admin/statistik/struktur/{struktur}/delete', [StrukturStatController::class, 'delete'])->name('delete');
    Route::get('/admin/statistik/struktur/{struktur}/edit', [StrukturStatController::class, 'edit'])->name('edit');
    Route::patch('/admin/statistik/struktur/{struktur}/update', [StrukturStatController::class, 'update'])->name('update');

    //survei
    Route::get('/admin/statistik/survei', [SurveiController::class, 'index'])->name('index');
    Route::get('/admin/statistik/survei/create', [SurveiController::class, 'create'])->name('create');
    Route::patch('/admin/statistik/survei/store', [SurveiController::class, 'store'])->name('store');
    Route::get('/admin/statistik/survei/{survei}/delete', [SurveiController::class, 'delete'])->name('delete');
    Route::get('/admin/statistik/survei/{survei}/edit', [SurveiController::class, 'edit'])->name('edit');
    Route::patch('/admin/statistik/survei/{survei}/update', [SurveiController::class, 'update'])->name('update');
    Route::get('/admin/statistik/survei/{survei}/show', [SurveiController::class, 'show'])->name('show');
    Route::get('/admin/statistik/survei/{survei}/hide', [SurveiController::class, 'hide'])->name('hide');

    //database
    Route::get('/admin/statistik/database', [DatabaseController::class, 'index'])->name('index');
    Route::patch('/admin/statistik/database/updatedba', [DatabaseController::class, 'update_dba'])->name('update_dba');
    Route::get('/admin/statistik/database/create', [DatabaseController::class, 'create'])->name('create');
    Route::patch('/admin/statistik/database/store', [DatabaseController::class, 'store'])->name('store');
    Route::get('/admin/statistik/database/{database}/delete', [DatabaseController::class, 'delete'])->name('delete');
    Route::get('/admin/statistik/database/{database}/edit', [DatabaseController::class, 'edit'])->name('edit');
    Route::patch('/admin/statistik/database/{database}/update', [DatabaseController::class, 'update'])->name('update');

    //buletin
    Route::get('/admin/statistik/buletin', [BuletinController::class, 'index'])->name('index');
    Route::get('/admin/statistik/buletin/create', [BuletinController::class, 'create'])->name('create');
    Route::patch('/admin/statistik/buletin/store', [BuletinController::class, 'store'])->name('store');
    Route::patch('/admin/statistik/buletin/{buletin}/publish', [BuletinController::class, 'publish'])->name('publish');
    Route::get('/admin/statistik/buletin/{buletin}/delete', [BuletinController::class, 'delete'])->name('delete');
    Route::get('/admin/statistik/buletin/{buletin}/edit', [BuletinController::class, 'edit'])->name('edit');
    Route::patch('/admin/statistik/buletin/{buletin}/update', [BuletinController::class, 'update'])->name('update');
    Route::get('/admin/statistik/buletin/{buletin}/show', [BuletinController::class, 'show'])->name('show');
    Route::get('/admin/statistik/buletin/{buletin}/hide', [BuletinController::class, 'hide'])->name('hide');
    // Route::get('/admin/bem', [PagesController::class, 'admin'])->name('admin');
    // Route::get('/admin/statistik', [PagesController::class, 'admin'])->name('admin');
    // Route::get('/admin/profil', [PagesController::class, 'admin'])->name('admin');
});
require __DIR__ . '/auth.php';
