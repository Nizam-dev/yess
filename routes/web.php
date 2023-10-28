<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KegiatanController AS AdminKegiatanController;
use App\Http\Controllers\Admin\ProgramController AS AdminProgramController;
use App\Http\Controllers\Admin\AmbasadorController AS AdminAmbasadorController;
use App\Http\Controllers\Admin\DashboardController AS AdminDashboardController;

use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'index']);
Route::get('program', [DashboardController::class, 'program']);
Route::get('kegiatan', [DashboardController::class, 'kegiatan']);
Route::get('about', [DashboardController::class, 'about']);
Route::get('ambasador', [DashboardController::class, 'ambasador']);
Route::get('ambasador/{name}', [DashboardController::class, 'ambasador_view']);
Route::get('program/{name}', [DashboardController::class, 'program_view']);
Route::get('kegiatan/{name}', [DashboardController::class, 'kegiatan_view']);





Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin', [AdminDashboardController::class, 'index']);


Route::get('admin/kegiatan', [AdminKegiatanController::class, 'index']);
Route::get('admin/kegiatan/add', [AdminKegiatanController::class, 'add']);
Route::get('admin/kegiatan/edit/{id}', [AdminKegiatanController::class, 'edit']);
Route::get('admin/kegiatan/delete/{id}', [AdminKegiatanController::class, 'delete']);
Route::post('admin/kegiatan', [AdminKegiatanController::class, 'post']);
Route::post('admin/kegiatan/{id}', [AdminKegiatanController::class, 'update']);

Route::get('admin/program', [AdminProgramController::class, 'index']);
Route::get('admin/program/add', [AdminProgramController::class, 'add']);
Route::post('admin/program', [AdminProgramController::class, 'post']);
Route::get('admin/program/edit/{id}', [AdminProgramController::class, 'edit']);
Route::get('admin/program/delete/{id}', [AdminProgramController::class, 'delete']);
Route::post('admin/program/{id}', [AdminProgramController::class, 'update']);


Route::get('admin/ambasador', [AdminAmbasadorController::class, 'index']);
Route::get('admin/ambasador/add', [AdminAmbasadorController::class, 'add']);
Route::post('admin/ambasador', [AdminAmbasadorController::class, 'post']);
Route::get('admin/ambasador/edit/{id}', [AdminAmbasadorController::class, 'edit']);
Route::get('admin/ambasador/delete/{id}', [AdminAmbasadorController::class, 'delete']);
Route::post('admin/ambasador/{id}', [AdminAmbasadorController::class, 'update']);



Route::middleware(['role:admin'])->group(function () {

});